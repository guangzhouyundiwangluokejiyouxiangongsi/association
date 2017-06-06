<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
use Think\Verify;
class HomeController extends Controller {

	public function _initialize()
	{  
		define(DOMAIN,'http://www.yundi88.com');
		$friend_link = M('friend_link')->where(array('is_show'=>1))->order('orderby')->select();
		$this->assign('friend_link',$friend_link);
        $this->sessionid = cookie('PHPSESSID');
        $title = M('navigation')->where(array('id'=>14))->getField('title');
        $description = M('navigation')->where(array('id'=>14))->getField('description');
        $keywords = M('navigation')->where(array('id'=>14))->getField('keywords');
        $this->assign('title',$title);
        $this->assign('description',$description);
        $this->assign('keywords',$keywords);
	}

    public function index(){    
        if (is_mobile()) redirect('/Mobile/index');
    	//新入会员   
        $store_apply = M('store_apply')->where(array('apply_state'=>1))->order('add_time desc')->limit(11)->getField('id,user_id');
        foreach ($store_apply as $key => $val) {
            $store_logo[] = M('store')->where(array('user_id'=>$val))->getField('store_id');
        }
        // 友情商会
        $shop_link = M('shop_link')->where(array('is_show'=>1))->order('orderby')->select();
        foreach($shop_link as &$v){
        	copy_img($v['link_logo']);
        }
        // 商会风采
        $fengcai = M('article')->where(array('cat_id'=>37,'is_open'=>1))->field('article_id,title,thumb')->order('add_time desc')->limit(10)->select();
        foreach($fengcai as &$vv){
        	copy_img($vv['thumb']);
        }
        // 新闻联播
        $lianbo = M('article')->where(array('cat_id'=>38,'is_open'=>1))->field('article_id,title,thumb')->order('add_time desc')->limit(3)->select();
        foreach($lianbo as &$vs){
        	copy_img($vs['thumb']);
        }
        // 资讯
        $zixun = M('article')->where(array('cat_id'=>34,'is_open'=>1))->field('article_id,title,add_time')->order('add_time desc')->limit(10)->select();
        // 动态
        $dongtai = M('article')->where(array('cat_id'=>35,'is_open'=>1))->field('article_id,title,add_time')->order('add_time desc')->limit(10)->select();
        // 公告
        $gonggao = M('article')->where(array('cat_id'=>36,'is_open'=>1))->field('article_id,title,add_time')->order('add_time desc')->limit(10)->select();
        $this->assign('zixun',$zixun);
        $this->assign('dongtai',$dongtai);
        $this->assign('gonggao',$gonggao);
        $this->assign('lianbo',$lianbo);
        $this->assign('fengcai',$fengcai);
        $this->assign('shop_link',$shop_link);
        $this->assign('store_logo',$store_logo);
        $this->display();
    }

    //商会加入多少商户
    public function promote()
    {

        if(IS_AJAX){//前端请求
            $num = M('config')->where(array('id'=>88))->getField('value');
            $this->ajaxReturn($num);

        }elseif(IS_POST){//操作系统增加
        $num = rand(1,3);
          M('config')->where(array('id'=>88))->setInc('value',$num);  exit;

        }else{
            $num = M('config')->where(array('id'=>88))->getField('value');
            $this->assign('num',$num);
            $this->display();
            
        }
    }
    
    public function detail_news(){
        $article_id = I('article_id',1);
        $article = D('article')->where(array('article_id'=>$article_id))->find();
        if($article){
            if ($article['cat_id'] == 32 || $article['cat_id'] == 33){
                $data['link_num'] = $article['link_num']+1;
                M('article')->where(array('article_id'=>$article_id))->save($data);
            }
            
            $parent = D('article_cat')->where("cat_id=".$article['cat_id'])->find();
            $map['cat_id'] = $parent['cat_id'];
            $map['is_open'] = 1;
            $parentss = D('article')->where($map)->order('add_time desc')->limit(15)->select();
            if($parent['parent_id'] != 0){
                $parents = D('article_cat')->where("cat_id=".$parent['parent_id'])->find();
            }
            $this->assign('parentss',$parentss);
            $this->assign('parents',$parents['cat_name']);
            $this->assign('cat_name',$parent['cat_name']);
            $this->assign('article',$article);
        }
        $this->display();
    } 
    

    public function news(){
        $article_id = I('new_id',0); 
        if (!$article_id){
            $article = M('article')->where(array('cat_id'=>35,'is_open'=>1))->order('add_time desc')->limit(1)->find();
        } else {
            $article = M('article')->where(array('article_id'=>$article_id,'is_open'=>1))->find();
        }
        if (!$article) $this->error('文章不存在');
        img_all(htmlspecialchars_decode($article['content']));
        $publish_time = ceil((time()-$article['publish_time'])/60);
        if ($publish_time < 0) {
            $data['publish_time'] = time();
            M('article')->where(array('article_id'=>$article_id))->save($data);
            $article['publish_time'] = '刚刚';
        } else {
            if ($publish_time > 1440){
                $article['publish_time'] = floor((time()-$article['publish_time'])/(60*60*24)).'天前';
            } else if ($publish_time > 60){
                    $article['publish_time'] = floor($publish_time/60).'小时前';
            } else {
                $article['publish_time'] = $publish_time.'分钟前';
            }
        }
        $data['link_num'] = $article['link_num']+1;
        M('article')->where(array('article_id'=>$article['article_id']))->save($data);
        $article2 = M('article')->where(array('cat_id'=>$article['cat_id'],'is_open'=>1))->field('article_id,title,thumb')->select();
        foreach ($article2 as $key => $val) {
            if ($val['article_id'] == $article['article_id']){
                $last = $article2[$key-1];
                $next = $article2[$key+1];
            }
        }
        $recommended = M('article')->where(array('recommended'=>1,'is_open'=>1))->field('article_id,title,thumb')->order('add_time desc')->limit(50)->select();
        foreach($recommended as $val){
            copy_img($val['thumb']);
        }
        $article_cat = M('article_cat')->where(array('cat_id'=>$article['cat_id']))->getField('cat_name');
        if ($article['cat_id'] == 38) $article_cat = '最新动态';
        $this->assign('article_cat',$article_cat);
        $this->assign('recommended',$recommended);
        $this->assign('last',$last);
        $this->assign('next',$next);
        $this->assign('article2',$article2);
        $this->assign('article',$article);
        $this->display();
    }

    public function elegant(){
        $article_id = I('new_id',0); 
        if (!$article_id){
           $article = M('article')->where(array('cat_id'=>37,'is_open'=>1))->order('add_time desc')->limit(1)->find();
        } else {
            $article = M('article')->where(array('article_id'=>$article_id,'is_open'=>1))->find();
        }
        img_all(htmlspecialchars_decode($article['content']));
        if (!$article) $this->error('文章不存在');
        $publish_time = ceil((time()-$article['publish_time'])/60);
        if ($publish_time < 0) {
            $data['publish_time'] = time();
            M('article')->where(array('article_id'=>$article_id))->save($data);
            $article['publish_time'] = '刚刚';
        } else {
            if ($publish_time > 1440){
                $article['publish_time'] = floor((time()-$article['publish_time'])/(60*60*24)).'天前';
            } else if ($publish_time > 60){
                    $article['publish_time'] = floor($publish_time/60).'小时前';
            } else {
                $article['publish_time'] = $publish_time.'分钟前';
            }
        }
        $data['link_num'] = $article['link_num']+1;
        M('article')->where(array('article_id'=>$article['article_id']))->save($data);
        $article2 = M('article')->where(array('cat_id'=>$article['cat_id'],'is_open'=>1))->field('article_id,title')->select();
        foreach ($article2 as $key => $val) {
            if ($val['article_id'] == $article['article_id']){
                $last = $article2[$key-1];
                $next = $article2[$key+1];
            }
        }
        $this->assign('last',$last);
        $this->assign('next',$next);
        $this->assign('article2',$article2);
        $this->assign('article',$article);
        $this->display();
    }

    public function ajax_jump(){
        if (session('seller_id') > 0 && session('user') != '' && session('store_id') > 0 && session('seller') !=''){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(0);
        }
    }

    public function gonggao(){
        $article = M('article'); // 实例化User对象
        $count      = $article->where(array('cat_id'=>36,'is_open'=>1))->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        $gonggao = M('article')->where(array('cat_id'=>36,'is_open'=>1))->field('article_id,title,thumb,add_time')->order('add_time desc')->limit($Page->firstRow.','.$Page->listRows)->select(); //公告
        foreach($gonggao as $v){
            copy_img($v['thumb']);
        }
        $recommended = M('article')->where(array('recommended'=>1,'is_open'=>1))->field('article_id,title,thumb,add_time')->order('add_time desc')->limit(50)->select();
        foreach($recommended as $val){
            copy_img($val['thumb']);
        }
        $this->assign('recommended',$recommended);
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('gonggao',$gonggao);
        $this->display();
    }

    //最新资讯
    public function demeanour(){
        $article = M('article'); // 实例化User对象
        $count      = $article->where(array('cat_id'=>34,'is_open'=>1))->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        $demeanour = M('article')->where(array('cat_id'=>34,'is_open'=>1))->field('article_id,title,thumb,add_time')->order('add_time desc')->limit($Page->firstRow.','.$Page->listRows)->select(); 
        foreach($demeanour as &$v){
            copy_img($v['thumb']);
        }
        $recommended = M('article')->where(array('recommended'=>1,'is_open'=>1))->field('article_id,title,thumb')->order('add_time desc')->limit(50)->select();
        foreach($recommended as $val){
            copy_img($val['thumb']);
        }
        $this->assign('recommended',$recommended);
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('demeanour',$demeanour);
        $this->display();
    }

    //最新动态
    public function demeanourmoll(){
        $article = M('article'); // 实例化User对象
        $count      = $article->where(array('cat_id'=>35,'is_open'=>1))->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        $demeanourmoll = M('article')->where(array('cat_id'=>35,'is_open'=>1))->field('article_id,title,thumb,add_time')->order('add_time desc')->limit($Page->firstRow.','.$Page->listRows)->select(); //公告
        foreach($demeanourmoll as $v){
            copy_img($v['thumb']);
        }
        $recommended = M('article')->where(array('recommended'=>1,'is_open'=>1))->field('article_id,title,thumb')->order('add_time desc')->limit(50)->select();
        foreach($recommended as $val){
            copy_img($val['thumb']);
        }
        $this->assign('recommended',$recommended);
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('demeanourmoll',$demeanourmoll);
        $this->display();
    }

    public function newsmember(){
        $store_id = I('store_id');
        if (!$store_id) $this->redirect('/Home/index');
        $store = M('store')->where(array('store_id'=>$store_id))->find();
        if (!$store) $this->redirect('/Home/index');
        $sheng = M('region')->where(array('id'=>$store['province_id']))->getField('name');
        $shi = M('region')->where(array('id'=>$store['city_id']))->getField('name');
        $qu = M('region')->where(array('id'=>$store['district']))->getField('name');
        $dizhi = $sheng.$shi.$qu.$store['store_address'];
        $this->assign('dizhi',$dizhi);
        $this->assign('store',$store);
        $this->display();
    }


    public function promote_school(){
        $article = M('article')->where(array('cat_id'=>40,'is_open'=>1))->select();//免费建设网站
        $article2 = M('article')->where(array('cat_id'=>41,'is_open'=>1))->select();//后台优化
        $this->assign('article',$article);
        $this->assign('article2',$article2);
        $this->display();
    }

    public function lists1(){
        $article_id = I('id');
        if (!$article_id) $this->error('文章不存在');
        $article = M('article')->where(array('article_id'=>$article_id,'is_open'=>1))->find();
        $data['link_num'] = $article['link_num']+1;
        M('article')->where(array('article_id'=>$article_id))->save($data);
        $article_cat = M('article')->where(array('cat_id'=>$article['cat_id'],'is_open'=>1))->select();
        foreach($article_cat as $key=>$val){
            if ($val['article_id'] == $article['article_id']){
                $last = $article_cat[$key-1];
                $next = $article_cat[$key+1];
                $this->assign('last',$last);
                $this->assign('next',$next);
            }
        }
        $this->assign('article',$article);
        $this->display();
    }

    public function listsht1(){
        $article_id = I('id');
        if (!$article_id) $this->error('文章不存在');
        $article = M('article')->where(array('article_id'=>$article_id,'is_open'=>1))->find();
        $data['link_num'] = $article['link_num']+1;
        M('article')->where(array('article_id'=>$article_id))->save($data);
        $article_cat = M('article')->where(array('cat_id'=>$article['cat_id'],'is_open'=>1))->select();
        foreach($article_cat as $key=>$val){
            if ($val['article_id'] == $article['article_id']){
                $last = $article_cat[$key-1];
                $next = $article_cat[$key+1];
                $this->assign('last',$last);
                $this->assign('next',$next);
            }
        }
        $this->assign('article',$article);
        $this->display();
    }

    public function tuiguang_common(){
        $article = M('article')->where(array('cat_id'=>40,'is_open'=>1))->select();//免费建设网站
        $article2 = M('article')->where(array('cat_id'=>41,'is_open'=>1))->select();//后台优化
        $this->assign('article',$article);
        $this->assign('article2',$article2);
        $this->display();
    }

    public function send_sms_reg_code()
    {   
        $mobile = I('mobile');
        $curl = curl_init();
        //设置抓取的url
        curl_setopt($curl, CURLOPT_URL, "http://www.yundi88.com/User/send_sms_reg_code2?mobile=".$mobile."&sessionid=".$this->sessionid);
        //设置头文件的信息作为数据流输出
        curl_setopt($curl, CURLOPT_HEADER, 0);
        //设置获取的信息以文件流的形式返回，而不是直接输出。
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        //执行命令
        $data = curl_exec($curl);
        //关闭URL请求
        curl_close($curl);
        print_r($data);


    }

    public function regstore()
    {   
        $url = "http://www.yundi88.com/user/regstoress";
        $post = I('post.');
        $post['sessionid'] = $this->sessionid;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        // post数据
        curl_setopt($curl, CURLOPT_POST, 1);
        // post的变量
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
        $output = curl_exec($curl);
        curl_close($curl);
        if ($output == '注册成功'){
            $user = M('users')->where(array('mobile'=>$post['username']))->find();
            $seller = M('seller')->where(array('user_id'=>$user['user_id']))->find();
            $store_id = M('store')->where(array('user_id'=>$user['user_id']))->getField('store_id');
            session('user',$user);
            session('seller',$seller);
            session('seller_id',$seller['seller_id']);
            session('store_id',$store_id);
            $this->ajaxReturn(array('status'=>1,'msg'=>'注册成功'));
        }else{
            $this->ajaxReturn(array('status'=>-1,'msg'=>$output));
        }
    }

    // ajax验证商户名是否重复
    public function ajax_seller()
    {   
        $seller_name = I('sellername','');
        $data['mobile'] = $seller_name;
        $data['email'] = $seller_name;
        $data['_logic'] = 'or';
        $obj = M('seller')->where(array('seller_name'=>$seller_name))->find();
        $res = M('users')->where(array($data))->find();
        if($obj){
            $this->ajaxReturn(true);
        } else {
            $this->ajaxReturn(false);
        }
    }

    // ajax验证手机号码是否可以用
    public function ajax_mobile()
    {
        $mobile = I('mobile','');
        $obj = M('users')->where(array('mobile'=>$mobile))->find();
        // $res = M('seller')->where(array('seller_name'=>$mobile))->find();
        if($obj){
            $this->ajaxReturn(true);
        } else {
            $this->ajaxReturn(false);
        }
    }

    // ajax验证店铺名字是否存在
    public function ajax_store()
    {   
        $store_name = I('storename','');
        $obj = M('store')->where(array('store_name'=>$store_name))->find();
        if ($obj) {
            $this->ajaxReturn(true);
        } else {
            $this->ajaxReturn(false);
        }
        
    }

    // 留言板
    public function messageboard()
    {   
        if (is_mobile()) redirect('/Mobile/messageboard');
        $this->display();
    }

    // 处理
    public function message()
    {   
        if (!I('post.name')){
            echo '<script>alert("请输入姓名");history.go(-1);</script>';
            exit;
        }
        if (I('post.name')){
            if (!preg_match('/^[a-zA-Z\x{4e00}-\x{9fa5}]{2,20}$/u', I('post.name'))){
                echo '<script>alert("用户名格式错误!");history.go(-1);</script>';
                exit;
            }
        }
        if (!I('post.message')){
            echo '<script>alert("请输入您的建议");history.go(-1);</script>';
            exit;
        }
        if (!I('post.qq') && !I('post.phone') && !I('post.email')){
            echo '<script>alert("QQ、电话号码、邮箱至少填写一个");history.go(-1);</script>';
            exit;
        } 
        if (strlen(I('post.message')) > 200){
             echo '<script>alert("您的建议超出200字");history.go(-1);</script>';
             exit;
        } 
        if (I('post.phone')){
            if (!preg_match('/^1[3|4|5|7|8][0-9]{9}$/', I('post.phone'))){
                echo '<script>alert("手机号码格式错误!");history.go(-1);</script>';
                exit;
            }
        }
        if (I('post.qq')){
            if (!preg_match('/^\d{5,10}$/', I('post.qq'))){
                echo '<script>alert("qq号码格式错误!");history.go(-1);</script>';
                exit;
            }
        }
        if (I('post.email')){
            if (!preg_match('/^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/', I('post.email'))){
                echo '<script>alert("邮箱号码格式错误!");history.go(-1);</script>';
                exit;
            }
        }
        $data['name'] = I('post.name');
        $data['qq'] = I('post.qq');
        $data['phone'] = I('post.phone');
        $data['email'] = I('post.email');
        $data['message'] = I('post.message');
        $data['addtime'] = time();
        $res = M('messageboard')->add($data);
        if ($res){ 
            echo '<script>alert("留言成功!");window.location.href="http://www.yundi88.com";</script>';
        }else{
            echo '<script>alert("留言失败!");history.go(-1);</script>';
        }
    }


}
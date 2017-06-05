<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
use Think\Verify;
class MobileController extends Controller {

    public function index()
    {   
        if (!is_mobile()) redirect('/Home/index');
        $about = M('article')->where(array('article_id'=>274,'cat_id'=>42,'is_open'=>1))->find();
        $about['content'] = mb_substr(strip_tags(htmlspecialchars_decode($about['content'])),0,85).'...';
        $linian = M('article')->where(array('article_id'=>275,'cat_id'=>42,'is_open'=>1))->find();
        $linian['content'] = strip_tags(htmlspecialchars_decode($linian['content']));
        $jiaru = M('article')->where(array('article_id'=>276,'cat_id'=>42,'is_open'=>1))->find();
        $jiaru['content'] = strip_tags(htmlspecialchars_decode($jiaru['content']));
        copy_img($jiaru['thumb']);
        $jiaru['thumb'] = editorimg($jiaru['thumb'],355,255);
        $zixun = M('article')->where(array('cat_id'=>34,'is_open'=>1))->order('recommended desc,add_time desc')->limit(3)->select();
        foreach($zixun as &$vv){
            copy_img($vv['thumb']);
            $vv['thumb'] = editorimg($vv['thumb'],355,255);
            $vv['title'] = getSubstr($vv['title'],0,13);
            $vv['content'] = getSubstr(strip_tags(htmlspecialchars_decode($vv['content'])),0,30);
        }
        $dongtai = M('article')->where(array('cat_id'=>35,'is_open'=>1))->order('recommended desc,add_time desc')->limit(3)->select();
        foreach($dongtai as &$v){
            copy_img($v['thumb']);
            $v['thumb'] = editorimg($v['thumb'],355,255);
            $v['title'] = getSubstr($v['title'],0,13);
            $v['content'] = getSubstr(strip_tags(htmlspecialchars_decode($v['content'])),0,30);
        }
        $chengnuo = M('article')->where(array('cat_id'=>43,'is_open'=>1))->find();
        copy_img($chengnuo['thumb']);
        $chengnuo['thumb'] = editorimg($chengnuo['thumb'],355,255);

        $chengnuo['title'] = getSubstr($chengnuo['title']);
        $chengnuo['content'] = getSubstr(strip_tags(htmlspecialchars_decode($chengnuo['content'])),0,30);
        $this->assign('chengnuo',$chengnuo);
        $this->assign('dongtai',$dongtai);
        $this->assign('zixun',$zixun);
        $this->assign('jiaru',$jiaru);
        $this->assign('about',$about);
        $this->assign('linian',$linian);
        $this->display();
    }

    public function information_detail()
    {   
        $article_id = I('article_id');
        $article = M('article')->where(array('article_id'=>$article_id,'is_open'=>1))->find();
        copy_img($article['thumb']);
        // $article['content'] = htmlspecialchars_decode($article['content']);
        img_all($article['content']);
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
        $this->assign('article',$article);
        $this->display();
    }

    public function about()
    {
        $article = M('article')->where(array('article_id'=>274,'is_open'=>1))->find();
        $article['content'] =  htmlspecialchars_decode($article['content']);
        img_all($article['content']);
        $this->assign('article',$article);
        $this->display();
    }

    public function information()
    {   
        $gonggao = M('article')->where(array('cat_id'=>36,'is_open'=>1))->order('add_time desc')->page($_GET['p'].',5')->select();
        $this->display();
    }

    public function zixun()
    {
        $zixun = M('article')->where(array('cat_id'=>34,'is_open'=>1))->order('add_time desc')->page($_GET['p'].',5')->select();
        foreach($zixun as &$v){
            copy_img($v['thumb']);
            $v['thumb'] = editorimg($v['thumb'],355,255);
            $v['title'] = getSubstr($v['title'],0,13);
            $v['content'] = getSubstr(strip_tags(htmlspecialchars_decode($v['content'])),0,30);
            $res[] = '<li><a href="information_detail?article_id='.$v['article_id'].'"><div class="img"><img src="'.$v['thumb'].'" ></div><div class="txt"><h3>'.$v['title'].'</h3><p>'.$v['content'].'</p><span>'.$v['click'].' 次浏览</span></div></a></li>';
        }
        $this->ajaxReturn($res);
    }

    public function dongtai()
    {
        $dongtai = M('article')->where(array('cat_id'=>35,'is_open'=>1))->order('add_time desc')->page($_GET['p'].',5')->select();
        foreach($dongtai as &$v){
            copy_img($v['thumb']);
            $v['thumb'] = editorimg($v['thumb'],355,255);
            $v['title'] = getSubstr($v['title'],0,13);
            $v['content'] = getSubstr(strip_tags(htmlspecialchars_decode($v['content'])),0,30);
            $res[] = '<li><a href="information_detail?article_id='.$v['article_id'].'"><div class="img"><img src="'.$v['thumb'].'" ></div><div class="txt"><h3>'.$v['title'].'</h3><p>'.$v['content'].'</p><span>'.$v['click'].' 次浏览</span></div></a></li>';
        }
        $this->ajaxReturn($res);
    }

    public function gonggao()
    {

        $gonggao = M('article')->where(array('cat_id'=>36,'is_open'=>1))->order('add_time desc')->page($_GET['p'].',5')->select();
        foreach($gonggao as &$v){
            copy_img($v['thumb']);
            $v['thumb'] = editorimg($v['thumb'],355,255);
            $v['title'] = getSubstr($v['title'],0,13);
            $v['content'] = getSubstr(strip_tags(htmlspecialchars_decode($v['content'])),0,30);
            $res[] = '<li><a href="information_detail?article_id='.$v['article_id'].'"><div class="img"><img src="'.$v['thumb'].'" ></div><div class="txt"><h3>'.$v['title'].'</h3><p>'.$v['content'].'</p><span>'.$v['click'].' 次浏览</span></div></a></li>';
        }
        $this->ajaxReturn($res);
    }

    public function join()
    {   
        if (session('seller_id') > 0 && session('user') != '' && session('store_id') > 0 && session('seller') !=''){
            header('location:http://www.yundi88.com/index.php/Mobile/Payment/join.html');
            exit;
        }
        $this->display();
    }
}
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="/Public/favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($title); ?></title>
<meta http-equiv="keywords" content="<?php echo ($keywords); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />

<!-- ie使用最高版本打开 -->
<meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
<meta name="renderer" content="ie-comp|ie-stand">
<link rel="stylesheet" type="text/css" href="/Public/pc/css/yshanghui.css">
<link rel="stylesheet" type="text/css" href="/Public/pc/css/animate.min.css">
<link rel="stylesheet" type="text/css" href="/Public/pc/css/nivo-slider.css">
<script type="text/javascript" src="/Public/pc/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/Public/pc/js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="/Public/pc/js/wow.min.js"></script>
<script type="text/javascript" src="/Public/pc/js/jquery.nivo.slider.js"></script>

<!-- <script type="text/javascript" src="/Public/pc/js/scroll_image.js"></script> -->
<script type="text/javascript" src="/Public/pc/js/gundong.js"></script>

<style type="text/css">
  <style>
    .slider-wrapper {
        width: 520px;
        /* width: 80%; */
        height:344px;
        margin-top: 150px;
        position:relative;
    }

    .top-banner{
        background-color: #333;
    }
    .nivoSlider img{width:520px;height:344px;}
    /*.top-banner{display: none;}*/
    *{padding: 0;margin: 0;}
    a{text-decoration: none;}
    .pop_ups_con{position: fixed;width: 440px;bottom: 25%;left: 37%;background-color: white;z-index: 10000;border-radius: 10px;overflow: hidden;display: none;}
    .tankuang{width: 100%;height: 110px;background: url(/Public/images/tangkuangbg.png) no-repeat;}
    .tankuang>a{display: block;width: 30px;height: 30px;background: none;text-align: right;margin: 2px;float: right;}
    h2{margin: 10px  0 0 20px;font-size: 16px;font-weight: 500;font-family: "微软雅黑";color: #333;text-align: left;}
    h3{margin: 5px 0 0 20px;font-size: 14px;font-weight: 500;font-family: "微软雅黑";color: #333;text-align: left;}
    .pop_ups_form{margin: 5px  30px 0 10px;}
    .company_form{margin: 5px  29px;width: 372px;}
    .company_form:after{clear: both;display: block;content: "";}
    .company_form>p{float: left;line-height: 25px;font-family: "微软雅黑";font-size: 12px;color: #333;width: 60px;}
    .company_form>input{float: left;width: 300px;padding-left: 10px;height: 25px;outline: none;border: 1px solid #999;}
    input::-webkit-input-placeholder{font-size: 12px;}
    .company_form>input:hover{border: 1px solid #0fa9fd;}
    .gender{margin: 5px  29px;width: 372px;}
    .gender:after{clear: both;display: block;content: "";}
    .gender>p{float: left;line-height: 25px;font-family: "微软雅黑";font-size: 12px;color: #333;width: 60px;}
    .gender>input{float: left;margin: 7px 10px;}
    .gender>i{float: left; font-family: "微软雅黑";font-size: 12px;font-style: normal;line-height: 25px;}
    .ver_code{margin: 5px  29px;width: 372px;}
    .ver_code:after{clear: both;display: block;content: "";}
    .ver_code>p{float: left;line-height: 25px;font-family: "微软雅黑";font-size: 12px;color: #333;letter-spacing: 3px;width: 60px;}
    .ver_code>input{float: left;width: 200px;height: 25px;border: 1px solid #999;outline: none;padding-left: 10px;}
    .ver_code>input:hover{border: 1px solid #0fa9fd;}
    /*.ver_code>i{font-style: normal;float: left;width: 100px;height: 27px;font-family: "微软雅黑";font-size: 12px;color: #fff;background-color: #0fa9fd;text-align: center;line-height: 27px;cursor: pointer;}*/
    .ver_code_click{border: none;float: left;width: 100px;height: 25px;font-family: "微软雅黑";font-size: 12px;color: #fff;background-color: #0fa9fd;text-align: center;line-height: 25px;cursor: pointer;outline: none;}
    /*.ver_code>i>img{width: 100%;height: 100%;}*/
    .refer{margin: 10px  auto 15px auto;width: 236px;position: relative;}
    .refer:after{clear: both;display: block;content: "";}
    .refer>button{float: left;width: 120px;height: 30px;font-family: "微软雅黑";color: #fff;line-height: 30px;border: none;outline: none;background: #4fbefa;text-align: center;border-radius: 30px;cursor: pointer;}
    .refer>button:hover{background: #0fa9fd;}
    .jump_login{float: left;line-height: 30px;margin: 0 10px;font-family: "微软雅黑";color: #333;font-size: 12px;}
    .jump_login>a{font-family: "微软雅黑";color: #4fbefa;font-size: 12px;}
    .jump_login>a:hover{color: #0fa9fd;}
    .pop_ups_form span{display: block;clear: both; font-family: "微软雅黑";font-size: 12px;color: #ff0000;padding-left: 65px;padding-top: 10px;display: none;}

    .button{margin: 35% auto 0 auto;width: 100px;height: 27px;}
    .button>button{width: 100px;height: 27px;text-align: center;line-height: 27px;font-family: "微软雅黑";font-size: 12px;color: #fff;border: none;background: #0fa9fd;border-radius: 25px;cursor: pointer;outline: none;}
   /* @media screen and (max-width:1920px;) and (min-width: 1440px;){
		.pop_ups_con{bottom: auto;top: 10%;}
      
	}*/

  @media only screen and (max-width: 1400px) and (min-width: 1000px){
  .pop_ups_con {
      bottom: 8%;
      left: 31%;
    }
  }

    </style>

</style>


</head> 

<body  > 

<!-- 使用动画效果必须加上实例化 -->
<script type="text/javascript">
  $(function(){
    if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
      new WOW().init();
    };
  });

var store = false;
var mobile = false;
var seller = false;
var pass2 = false;
var code = false;
var nickname = false;


  $(function(){
      $(".tankuang>a").click(function(){
        $("body").css("background","none");
        $(".pop_ups_con").hide();
        $("#fade").hide();
        //清空表单
        $("input[type=reset]").trigger("click");
        $('.acc_num_code').hide();
        $('.con_info_code').hide();
        $('.com_name_code').hide();
       
      })
    })
  
  $(function(){
    if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
      new WOW().init();
    };
  });

  $(function(){
      var comName = /^[a-zA-Z\u4E00-\u9FA5]{4,32}$/;/*输入内容为中文*/
      // var comName = /^[\u4E00-\u9FA5]{5,16}$/;/*输入内容为中文*/

      var accNum=/^[a-zA-Z][a-zA-Z_\$0-9\#]{5,15}/;/*验证账号*/
      // var accNum = /^[a-zA-Z0-9_]{5,16}$/;/*输入内容不为中文且没有特殊字符*/
      var conInfo = /^1[3|4|5|7|8][0-9]{9}$/;/*手机号码*/
      // var pass = /^[A-Za-z0-9]{6,20}$/;//密码
      var pass = /(?!^\\d+$)(?!^[a-zA-Z]+$)(?!^[_#@]+$).{6,}/;//密码

      // var navname = /[\u4E00-\u9FA5\uF900-\uFA2D]/;/*验证昵称*/
      var navname = /^[a-zA-Z\u4E00-\u9FA5]{2,}$/;/*验证昵称*/
       // var navname =/^\d+$/;

      $(".company_name input").blur(function(){/*企业名称*/
        if (!$(".company_name input[type=text]").val()){
           $('.com_name_code').html('企业名称不能为空');
          $(".com_name_code").show();
          store = false;
          return false;
        }
        if(!comName.test($(".company_name input[type=text]").val())){
          $(".com_name_code").show();
          $('.com_name_code').html('请正确输入 例如：广州XX有限公司');
          store = false;
          return false;
        }else{
          $(".com_name_code").hide();
        }
        $.ajax({
          type:'post',
          url:"/Home/ajax_store",
          data:'storename='+$(".company_name input[type=text]").val(),
          success:function(res){
            if (res){
               $('.com_name_code').html('企业名称已存在');
               $(".com_name_code").show();
               store = false;
            } else {
              store = true;
            }
          }
        })
      })

      
      $(".account_num input").blur(function(){/*账号*/
        if (!$(".account_num input[type=text]").val()){

          $('.acc_num_code').html('账号不能为空');
          $(".acc_num_code").show();
          seller = false;
          return false;
        }
        if(!accNum.test($(".account_num input[type=text]").val())){
          $(".acc_num_code").show();
          $('.acc_num_code').html('请输入以字母开头6-16位数字和英文');
          seller = false;
          return false;
        }else{
          $(".acc_num_code").hide();
        }
        $.ajax({
          type:'post',
          url:"/Home/ajax_seller",
          data:'sellername='+$(".account_num input[type=text]").val(),
          success:function(res){
            if(res){
              $('.acc_num_code').html('账号已存在');
              $(".acc_num_code").show();
              seller = false;
            } else {
              seller = true
            }
          }
        })
      })

      $(".account_pass input").blur(function(){/*密码*/
        if (!$(".account_pass input[type=password]").val()){
          $('.acc_pass_code').html('密码不能为空');
          $(".acc_pass_code").show();
          pass2 = false;
          return false;
        }

        if(!pass.test($(".account_pass input[type=password]").val())){
          $('.acc_pass_code').html('请正确输入密码 6-16位数字或英文');
          $(".acc_pass_code").show();
          pass2 = false;
          return false;
        }else{
          $(".acc_pass_code").hide();
          pass2 = true;
        }
      })

      $(".nick_name input").blur(function(){
        if (!$(".nick_name input[type=text]").val()){
            $('.nick_name_code').html('昵称不能为空');
            $(".nick_name_code").show();
            nickname = false;
            return false;
          }
          if(!navname.test($(".nick_name input[type=text]").val())){
          $(".nick_name_code").show();
          $('.nick_name_code').html('请输入中文名或英文名');
          nickname = false;
          return false;
        }
         else {
            $(".nick_name_code").hide();
            nickname = true;
          }
      })
      $(".contact_info input").blur(function(){/*联系方式*/
        if (!$(".contact_info input[type=text]").val()){
          $(".con_info_code").show();
          $('.con_info_code').html('手机号不能为空');
          mobile = false;
          return false;
        }
        if(!conInfo.test($(".contact_info input[type=text]").val())){
          $(".con_info_code").show();
          $('.con_info_code').html('请正确填写11位手机号');
          mobile = false;
          return false;
        }else{
          $(".con_info_code").hide();
        }
        $.ajax({
          type:'post',
          url:"/Home/ajax_mobile",
          data:'mobile='+$(".contact_info input[type=text]").val(),
          success:function(res){
            if(res){
              $('.con_info_code').html('手机号码已存在');
              $(".con_info_code").show();
              mobile = false;
              return false;
            } else {
              mobile = true;
            }
          }
        })
      })
      $(".ver_code input").blur(function(){/*验证码不为空*/
        if($(".ver_code input[type=text]").val()==""){
          $(".ver_code_code").show();
        }else{
          $(".ver_code_code").hide();
          code = true;
        }
      })
      $(".refer button[type=submit]").click(function(){/*提交*/
        if (!store){
          $('.com_name_code').html('企业名称格式错误或已被注册');
          $(".com_name_code").show();
          return false;
        }
        if (!seller){
          $('.acc_num_code').html('账号格式错误或已被注册');
          $(".acc_num_code").show();
          return false;
        }

        if (!pass2){
          $(".acc_pass_code").html('请正确输入密码');
          $(".acc_pass_code").show();
          return false;
        }

        if(!nickname){
          $(".nick_name_code").show();
          return false;
        } 

        if (!mobile){
          $('.con_info_code').html('手机号码格式错误或已被注册');
          $(".con_info_code").show();
          return false;
        }

        if (!code){
          $(".ver_code_code").show();
          return false;
        } 

        $.post('/Home/regstore',$('#userform').serialize(),function(res){
          if (res.status == 1){
            top.location.href = "http://www.yundi88.com/Seller/Commerce/index?shanghui=123";
          } else {
            alert(res.msg);
            return false;
          }
        })
        return false;
      })

      var i;
      $(".ver_code_click").click(function(){
        if (i>0){
          alert('60秒内不能重复获取验证码');
          return false;
        }
        if(!conInfo.test($(".contact_info input[type=text]").val())){
          alert("请输入正确的手机号码");
          return false;
        }else{
          $.post('/Home/send_sms_reg_code',{'mobile':$(".contact_info input[type=text]").val()},function(res){
            var obj = eval('('+res+')');
            times();
            alert(obj['msg']);
          })
        }
      })
      

      function times(){
        i = 60;
        var time = setInterval(function(){
           $('.ver_code_click').html( i +'秒中后重新获取');
        i--;
        if(i < 0){clearInterval(time); $('.ver_code_click').html('重新获取');$('.ver_code_click').removeAttr('disabled');}else{$('.ver_code_click').attr({'disabled':"disabled"});}
        },1000);
      }
    })

</script>


<header class="head">
    <!-- <div class="left">Hi，你好  kky</div> -->
    <nav class="nav">
      	<img src="/Public/pc/images/LOGO.png">
        <div class="navs">
          <a href="/Home/index.html" <?php if(ACTION_NAME == index) echo 'style="color:#f00"'; ?> >首页</a>
          <a href="/Home/aboutyun.html" i=".fengcai" <?php if(ACTION_NAME == aboutyun || ACTION_NAME == elegant) echo 'style="color:#f00"'; ?>>关于商会</a>
          <a href="/Home/demeanour.html" i=".zixun" <?php if(ACTION_NAME == demeanour || ACTION_NAME == demeanour || ACTION_NAME == demeanourmoll || ACTION_NAME == gonggao || ACTION_NAME == news || ACTION_NAME == newsmember) echo 'style="color:#f00"'; ?>>商会资讯</a>
          <a href="/Home/Joinus.html" <?php if(ACTION_NAME == Joinus) echo 'style="color:#f00"'; ?>>加入优势</a>
          <a href="/Home/Contactus.html"  <?php if(ACTION_NAME == Contactus ) echo 'style="color:#f00"'; ?>>联系我们</a>
          <div class="Contactusa fengcai"><p onclick="javascript:window.location.href='/Home/elegant.html'">商会风采</p></div>
          <div class="Contactusas zixun">
            <p onclick="javascript:window.location.href='/Home/demeanour.html'">最新资讯</p>
            <p onclick="javascript:window.location.href='/Home/demeanourmoll.html'">最新动态</p>
            <p onclick="javascript:window.location.href='/Home/gonggao.html'">公告</p>
          </div>
        </div>
    </nav>
  </header><!--顶部结束-->
  <script type="text/javascript">
        $(function(){
          $('.navs>a').bind('mouseover',function(){

          $('.navs>a').each(function(){

            $($(this).attr('i')).css('display','none');       
            $($(this).attr('i')).hide();
          })

          $($(this).attr('i')).show();

        });

          $('.navs>a').bind('mouseout',function(){

              $($(this).attr('i')).hide();
          });


          $('.Contactusa').bind('mouseover',function(){
            $(this).show();
          });
          $('.Contactusas').bind('mouseover',function(){
            $(this).show();
          });


          $('.Contactusa').bind('mouseout',function(){
            $(this).hide();
          });
          $('.Contactusas').bind('mouseout',function(){
            $(this).hide();
          });
});
    </script>

 <script type="text/javascript">
        $(function(){
          $('.navs>a').bind('mouseover',function(){
          $('.navs>a').each(function(){
            $($(this).attr('i')).css('display','none');       
            $($(this).attr('i')).hide('aa');
          })
          $($(this).attr('i')).show('aa');

        });
});
    function ajax_jump(){
      $.post('/Home/ajax_jump',function(res){
        if (res){
          document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block';
        }else{
          chicked();
        }
      })
    }
    </script>

    <div class="pop_ups_con">
    <div class="tankuang">
      <a href="javascript:void(0)"><img src="/Public/images/joinover.png"></a>
    </div>
    <h2>欢迎您加入企业联盟云商会！</h2>
    <h3>填写好以下资料，我们将安排客服专员一对一进行服务。</h3>
    <div class="pop_ups_form">
      <form id="userform">
        <div class="company_name company_form">
          <p>企业名称：</p>
          <input type="text" placeholder="请填写企业名称与营业执照一致" name="storename"  ></input>
          <span class="com_name_code">请输入正确名称</span>
        </div>

        <div class="account_num company_form">
          <p>账　　号：</p>
          <input type="text" placeholder="字母开头6-16位数字和英文"  name="sellername"></input>
          <span class="acc_num_code">请输入正确账号</span>
        </div>

        <div class="account_pass company_form">
          <p>密　　码：</p>
          <input type="password" placeholder="6-16位数字和英文"  name="password"></input>
          <span class="acc_pass_code">密码格式不对</span>
        </div>
        <div class="gender">
          <p>称呼：</p>
          <input type="radio" name="sex" value="1" checked="true"></input>
          <i>先生</i>
          <input type="radio" name="sex" value="2"></input>
          <i>女士</i>
        </div>
        <div class="nick_name company_form">
          <p>昵称：</p>
          <input type="text" placeholder="请输入昵称" name="nickname"></input>
          <span class="nick_name_code">请输入昵称</span>
        </div>
        <div class="contact_info company_form">
          <p>手机号码：</p>
          <input type="text" placeholder="请输入手机号码" name="username" ></input>
          <span class="con_info_code">手机号码不正确</span>
        </div>
        <div class="ver_code">
          <p>验证码：</p>
          <input type="text" placeholder="请输入验证码" name="code"></input>
          <botton class="ver_code_click">点击获取验证码</botton>
          <span class="ver_code_code">请输入验证码</span>
        </div>
        <div class="refer">
          <button type="submit">提交</button>
          <div class="jump_login">已有账号？<a target="_blank" href="http://www.yundi88.com/user/login">去登陆</a></div>
        </div>
        <input type="reset" name="reset"  style="display: none;" />
      </form>
    </div>
  </div>

  <main class="ymain">
  <!-- benner部分 -->
    <!-- <div class="benner">
      <div class="yjiaru"><a href="#"><img src="./images/ann.png" ></a></div>
      <img src="./images/indexBANNER.jpg" class="ybenner" style="width:100%;">   
    </div> -->   
    <div>
      <img src="/Public/pc/images/indexBANNER.jpg" style="width:100%;">   
    </div>

  <!-- 关于商会 -->

  <!-- benner下面部分 -->
    <div  class="indexabout">
        <h2 >关于商会</h2>
        <p>企业联盟云商会对接各种商业资源，最大化利用互联网+价值，帮助中国中小型企业探索出适合企业的转型升级之路。同时，云商会定期组织各界商务人士，以互联网+、自
  媒体、资本投融资、创业项目等，通过互联网在线分享以及线下交流会等形式，形成良好的跨界人士相互交流与沟通的环境。且商会成员主要是来自各行业企业法人/
  创始人，达到共建共享共赢的核心理念。企业联盟云商会是一个共享人脉资源促进商业合作发展的商业协会。</p>
      
      <ul>
      
          <li onclick="ajax_jump()" ><a href="javascript:" ><img src="/Public/pc/images/addmember.png" class="indexadd">申请加入</a></li>
      
          
     
          <!-- <li><a href="#"><img src="/Public/pc/images/kuaisu.png" class="indexQuick">快速加入</a></li> -->
          <li><a href="<?php echo U('/Home/Joinus');?>" style="display:inline-block;width:100%;height:100%;"><img src="/Public/pc/images/youshi.png" class="advantage">加入优势</a></li>
          <div class="cl"></div>
        </ul>
    </div>

    <!-- benner部分 -->
  <div><img src="/Public/pc/images/advertising.png" style="width:100%;" /></div>

    <!-- 商会咨询部分 -->
  <div class="information">
    <h2>商会资讯</h2>
    <p>关注实时动态，记录点滴进步</p>
    <p>商会资讯使你在最短的时间内了解企业最新新闻</p>

    <!-- 幻灯片部分 -->
    <div class="informationl">
        <div id="main">
        <!-- <div class="setmoll"><a href="#">查看更多+</a></div> -->
          <!--下面的显示区域-->
          <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
            <?php if(is_array($lianbo)): foreach($lianbo as $key=>$val): ?><a target="_blank" href="<?php echo U('/Home/news',array('new_id'=>$val['article_id']));?>">
                <img src="<?php echo ($val['thumb']); ?>" data-thumb="<?php echo ($val['thumb']); ?>" alt="" title="<?php echo (getSubstr($val['title'],0,25)); ?>"  style="width:520px;height:344px;"/></a><?php endforeach; endif; ?>
            </div>
        </div>
         
         <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
          </script>
      </div>
    </div>
 <!--  <script type="text/javascript" src="/Public/pc/js/huandengpian.js"></script> -->
  
  <!-- 新闻咨询部分 -->
    
    <div class="informationr">
        <ul class="informationrt">
        

        <li class="infors" i='.lista'>最新资讯</li>
        <li i=".listb">最新动态</li>
        <li i=".listc">公告</li>
        
        <div class="cl"></div>
        </ul>

       <div class="lista list">
          <ul>
            <?php if(is_array($zixun)): foreach($zixun as $key=>$vv): ?><li><span><a target="_blank" href="<?php echo U('/Home/news',array('new_id'=>$vv['article_id']));?>"><?php echo (getSubstr($vv["title"],0,22)); ?></a><p style="float:right;"><?php echo (date('Y-m-d', $vv["add_time"])); ?></p></span></li><?php endforeach; endif; ?>
         </ul>  
      </div>

        <div class="listb list">
          <ul>
          <?php if(is_array($dongtai)): foreach($dongtai as $key=>$vv2): ?><li><span><a target="_blank" href="<?php echo U('/Home/news',array('new_id'=>$vv2['article_id']));?>"><?php echo (getSubstr($vv2["title"],0,22)); ?></a><p style="float:right;"><?php echo (date('Y-m-d',$vv2["add_time"])); ?></p></span></li><?php endforeach; endif; ?>
         </ul>  
      </div>

        <div class="listc list">
          <ul>
          <?php if(is_array($gonggao)): foreach($gonggao as $key=>$vv3): ?><li><span><a target="_blank" href="<?php echo U('/Home/news',array('new_id'=>$vv3['article_id']));?>"><?php echo (getSubstr($vv3["title"],0,22)); ?></a><p style="float:right;"><?php echo (date('Y-m-d',$vv3["add_time"])); ?></p></span></li><?php endforeach; endif; ?>
         </ul>  
      </div>
  </div>
  
  <script type="text/javascript" src="/Public/pc/js/renmengzixun.js"></script> 
  <div class="cl"></div>
</div>
  <!-- 商会风采 -->
  <div class="demeanour">
    <div class="commerce">
    
      <h2>
      商会风采
      </h2>

      <p>企业联盟云商会对接各种商业资源，最大化利用互联网+价值，帮助</p>
      <p>中国中小型企业探索出适合企业的转型升级之路</p>
      <ul>
      <?php if(is_array($fengcai)): foreach($fengcai as $key=>$vv4): ?><li><a target="_blank" href="<?php echo U('/Home/elegant',array('new_id'=>$vv4['article_id']));?>"><img src="<?php echo ($vv4["thumb"]); ?>"></a><?php echo (getSubstr($vv4["title"],0,15)); ?></li><?php endforeach; endif; ?>
      <div class="cl"></div>
      </ul>
    </div>
  </div>
  
  <!-- 新入住会员 -->
<div class="rollbox">
  <h2>新入驻会员</h2>
  <div class="scroll_area" style="width:1185px;overflow:hidden;">
  <div class="scroll_list" >
   <ul class="scroll_ul" id="one1">
   <?php if(is_array($store_logo)): foreach($store_logo as $key=>$vv): ?><li  id="show1" style="border:1px solid #ccc;"><a target="_blank" href="<?php echo U('/Home/newsmember',array('store_id'=>$vv));?>"><img src="<?php echo templogo($vv,190,90);?>" class="rollboxa" style="max-width: 190px;max-height: 90px;"></a></li><?php endforeach; endif; ?>
   </ul>
  </div>
  <a id="prev" class="btn_icon" href="javascript:;">></a>
  <a id="next" class="btn_icon" href="javascript:;"><</a>
 </div>
</div>

<!-- <script>      
  var one1 = document.getElementById('one1');
  var oLi = one1.getElementsByTagName('li');  
  console.log(oLi);   
  for(var i =1;i<=6;i++){
    var oDiv = document.getElementById('show'+i);
    oDiv.onmouseover = function(){
      this.getElementsByClassName('zhezhao')[0].style.display ='block';
      this.getElementsByClassName('rollboxa')[0].style.display ='none';
    }
    oDiv.onmouseout = function(){
      this.getElementsByClassName('zhezhao')[0].style.display ="none";
      this.getElementsByClassName('rollboxa')[0].style.display ='block';
    }
  }     
</script> -->

  
<div class="rollboxs">
  <h2>其它联盟商会</h2>
  <div class="scroll_areas">
  <div class="scroll_lists">
   <ul class="scroll_uls">
    <?php if(is_array($shop_link)): foreach($shop_link as $key=>$vv): if($vv[target]): ?><li><a target="_blank" href="<?php echo ($vv["link_url"]); ?>">
    <?php else: ?>
    <li><a href="<?php echo ($vv["link_url"]); ?>"><?php endif; ?>
    <img src="<?php echo ($vv["link_logo"]); ?>"><?php echo ($vv["link_name"]); ?></a></li><?php endforeach; endif; ?>
   </ul>
  </div>
  <a id="prevs" class="btn_icons1" href="javascript:;"><img src="/Public/pc/images/nexts.png"></a>

  <a id="nexts" class="btn_icons2" href="javascript:;"><img src="/Public/pc/images/prevs.png"></a>

 </div>
</div>

 <div id="light" class="white_content"> 
      <div class="tankuang">
        <a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"><img src="/Public/pc/images/joinover.png"></a>       
      </div>
      <h3>尊敬的用户您好！</h3>
      <p style="height:40px;line-height: 40px;">首年1688元加入企业联盟云商会享有的主要服务内容如下：</p>
      <p>1.获得PC+手机网站+微商城+APP应用软件<br>
      2.一站式为您设计好官网及店铺页面，并完善您的信息<br>
      3.资深设计师为您首年设计10张banner图作为官网展示<br>
      4.产品信息优先推送收录并全网推广<br>
      5.享有全年云狄网金牌商家展示服务<br>
      6.成为优选供应商，享有商城至尊版最高级别推广服务<br>
      7.协助会员发布新媒体100篇软文，曝光品牌服务<br>
      8.定期出版商会杂志，冠名企业信息彰显实力<br>
      9.出版营销黄页免费推广到全国3000万企业手里<br>
      10.定期邀约会员参与企业联盟研讨大会，共建共享经济！<br></p>

      <script type="text/javascript">      
            function nowpayss(){
            var Sys={};        
            var ua=navigator.userAgent.toLowerCase();        
            var s;
             (s=ua.match(/msie ([\d.]+)/))?Sys.ie=s[1]:
             (s=ua.match(/firefox\/([\d.]+)/))?Sys.firefox=s[1]:
             (s=ua.match(/chrome\/([\d.]+)/))?Sys.chrome=s[1]:
             (s=ua.match(/opera.([\d.]+)/))?Sys.opera=s[1]:
             (s=ua.match(/version\/([\d.]+).*safari/))?Sys.safari=s[1]:0;        
            if(Sys.chrome){   
                alert('您的浏览器版本不支持,请换个浏览器在试！');
                $('#light').hide();
                $('#fade').hide();

            }else{
              window.open('<?php echo U('Seller/Commerce/index');?>');
            }             
        };           
  </script>

        <button  onclick="window.open('http://www.yundi88.com/Seller/Commerce/index');">确定</button>
     </div>

  <div id="fade" class="black_overlay"></div> 


<div class="cl"></div>
<footer class="footer">
<div class="top-back" style="display: none;">
  <a class="top" href="javascript:;">︿</a>
  <a class="txt" href="javascript:;">回到顶部</a>
</div>

<script type="text/javascript">
  $(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
      $('.top-back').show(300);
    }
    else
    {
      $('.top-back').hide(300);
    }
  });
  $(".top-back").click(function(){
    $('body,html').animate({scrollTop:0},1000);
     return false;
  });
</script>

<style>
.pr a:hover{color: red}
.pr {text-align: center;}
</style>
    <div class="pr" style="text-align: center;">
	      <div class="yushangfooter" style="text-align: center;">
              <ul>
                <li><a target="_blank" href="/Home/index.html">首页</a></li>
                <li><a target="_blank" href="/Home/aboutyun.html">关于商会</a></li>
                <li><a target="_blank" href="/Home/demeanour.html">商会资讯</a></li>
                <li><a target="_blank" href="/Home/Joinus.html">加入优势</a></li>
                <li><a target="_blank" href="/Home/Contactus.html">联系我们</a></li>
                <div class="cl"></div>
              </ul>
             <div class="yunshangyoulian">
          <?php if(!empty($friend_link)): ?>友情链接：<?php if(is_array($friend_link)): foreach($friend_link as $key=>$v3): ?><a href="<?php echo ($v3[link_url]); ?>" <?php if ($v3[target] == 1){ ?>
      target="_blank" <?php } ?>
      > <?php echo ($v3[link_name]); ?></a><?php endforeach; endif; endif; ?>
             </div>  
             <div class="yunshangdizhi">地址：广东省广州市天河区科韵路科韵大厦7楼</div>                  
    </div>
</footer>

  </main> 


</body> 
<script>
  function chicked(){
        // $("body").css("background","rgba(0,0,0,0.8)");
        $(".pop_ups_con").show();
        $("#fade").show();
      }
</script>
<script type="text/javascript">
  $(function(){

  $(".top-banner").remove();

})

</script>
</html>
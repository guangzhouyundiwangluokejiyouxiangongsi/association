<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="/Public/favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>云商会-关于商会</title> 

<!-- ie使用最高版本打开 -->
<meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">

<link rel="stylesheet" type="text/css" href="/Public/pc/css/yshanghui.css">

<link rel="stylesheet" type="text/css" href="/Public/pc/css/animate.min.css">

<script type="text/javascript" src="/Public/pc/js/jquery-1.7.2.min.js"></script>

<script type="text/javascript" src="/Public/pc/js/wow.min.js"></script>

</head> 

<body  > 

<!-- 使用动画效果必须加上实例化 -->
<script type="text/javascript">
  $(function(){
    if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
      new WOW().init();
    };
  });
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
    </script>

  </header><!--顶部结束-->

	<main class="ymain">
  <!-- benner部分 -->
    <div class="benner">
      <div class="ayjiaru">
        <img src="/Public/pc/images/A.png" class="wow slideInLeft">
        <img src="/Public/pc/images/association.png" class="wow slideInRight"></div>
      <img src="/Public/pc/images/aboutben.png" class="ybenner">   
    </div>


    <!-- benner下部分图 -->
    <div class="abens">
      <img src="/Public/pc/images/1904.png" class="wow zoomIn" style="left:33%;top:-40%;">
    </div>

  <div class="abmain">
      <div class="abmaina wow zoomIn" >
      <img src="/Public/pc/images/abx1.png" >
        <h3>企业联盟云商会简介</h3>
        <p>企业联盟云商会，云具有弥漫性、无所不在的分布性和社会性特征，云也可以说是网络、<font style="color:#e72838">互联网，云商会</font>就是云般无处不在的线上线下商业协会，云商会就是具有云的特性的商业协会。取名另一层含义是因为我们是以云狄网这个平台来组建的一个<font style="color:#e72838">共享人脉资源促进商业合作</font>发展的商业协会-企业联盟云商会。</p>
      </div>
      <div class="abmianb ">
       <img src="/Public/pc/images/zongzhi.png" class="abline wow slideInLeft">
        <h3 class="wow slideInRight">企业联盟云商会宗旨</h3>
        <div class="cl"></div>
        <div class="abmains wow zoomIn">
          <div class="abmainsa">
            <h4>促进企业数字经济发展，</h4>
            <h4>对接国际数字技术与产业；</h4>
             <p>促进中国传统企业信息化发展；促进中国民营企业交流；促进中国企业管理和经营方式快速转型；促进产业结构调整和升级。旨在整合社会资源，最大化利用其商业价值，帮助中国企业探索出适合自己的转型升级之路。</p>
          </div>
        </div>
        <div class="cl"></div>
      </div> 
  </div>

  </main>	

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
</body> 
</html>
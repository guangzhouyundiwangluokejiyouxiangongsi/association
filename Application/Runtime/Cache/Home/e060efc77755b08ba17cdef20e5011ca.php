<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="/Public/favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>云商会-商会资讯</title> 

<!-- ie使用最高版本打开 -->
<meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">

<link rel="stylesheet" type="text/css" href="/Public/pc/css/yshanghui.css">

<link rel="stylesheet" type="text/css" href="/Public/pc/css/animate.min.css">

<script type="text/javascript" src="/Public/pc/js/jquery-1.7.2.min.js"></script>

<script type="text/javascript" src="/Public/pc/js/wow.min.js"></script>

<script type="text/javascript" src="/Public/pc/js/gundongs.js"></script>

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
        <img src="/Public/pc/images/fengcaia.png" class="wow slideInLeft">
        <img src="/Public/pc/images/information.png" class="wow slideInRight"></div>
      <img src="/Public/pc/images/aboutben.png" class="ybenner">   
    </div>
    
    <div class="Contactusb">
      <p>当前位置：<a target="_blank" href="<?php echo U('/Home/demeanour');?>">商会资讯</a> > <a href="<?php echo U('/Home/demeanour');?>">最新资讯</a></p>
      <div class="commerce">
          <h2>商会资讯</h2>
          <img src="/Public/pc/images/fegncai1.png">
      </div>

        <div class="commerqiehuan">
          <ul>
            <li id="div" class="commerqiehuans" i=".zuixin"><a href="<?php echo U('/Home/demeanour');?>#div" style="color:#fff">最新资讯</a></li>
            <li  id="div2" i=".zuixins"><a href="<?php echo U('/Home/demeanourmoll');?>#div2">最新动态</a></li>
            <li id="div3" i=".gonggao"><a href="<?php echo U('/Home/gonggao');?>#div3">公告</a></li>
            <div class="cl"></div>
          </ul>   
      </div>
      
<style type="text/css">
  .zuixins{display:none;}
  .gonggao{display:none;}
  .scroll_ulss li a p:hover{color: red}
  .elegantp:hover{color: red !important}
</style>


    </script>



     <div class="elegant zuixin">
        <ul>
          <?php if(is_array($demeanour)): foreach($demeanour as $key=>$vv): ?><li>
            <a target="_blank" href="<?php echo U('/Home/news',array('new_id'=>$vv['article_id']));?>"><img src="<?php echo ($vv["thumb"]); ?>"></a>
            <p class="elegantp"><a target="_blank" href="<?php echo U('/Home/news',array('new_id'=>$vv['article_id']));?>"><?php echo (getSubstr($vv["title"],0,15)); ?></a></p>
            <p class="elegantt"><a target="_blank" href="<?php echo U('/Home/news',array('new_id'=>$vv['article_id']));?>"><?php echo (date('Y-m-d',$vv["add_time"])); ?></a></p>
          </li><?php endforeach; endif; ?>
          <div class="cl"></div>
        </ul> 
      </div>

      <div class="eleganttpag">
          <ul>
            <?php echo ($page); ?>
            <div class="cl"></div>
          </ul> 

      </div>


<div class="rollboxss">
  <h2>推荐文章</h2>
  <div class="scroll_areass">
  <div class="scroll_listss">
   <ul class="scroll_ulss">
     <?php if(is_array($recommended)): foreach($recommended as $key=>$val): ?><li><a target="_blank" href="<?php echo U('/Home/news',array('new_id'=>$val['article_id']));?>"><img src="<?php echo ($val["thumb"]); ?>"><p><?php echo (getSubstr($val["title"],0,15)); ?></p></a></li><?php endforeach; endif; ?>
   </ul>
  </div>
  <a id="prevss" class="btn_icons1" href="javascript:;"><img src="/Public/pc/images/nexts.png"></a>

  <a id="nextss" class="btn_icons2" href="javascript:;"><img src="/Public/pc/images/prevs.png"></a>

 </div>
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
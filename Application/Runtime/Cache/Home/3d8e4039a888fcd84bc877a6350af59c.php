<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>云商会首页</title>
	<link rel="stylesheet" type="text/css" href="/Public/mobile/css/index.css">
	<link rel="stylesheet" type="text/css" href="/Public/mobile/css/landscape.css">
	<link rel="stylesheet" href="/Public/mobile/css/swiper.min.css">
	<link rel="shortcut icon" href="/Public/favicon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" /> 
	<link rel="stylesheet" type="text/css" href="/Public/mobile/css/public.css">
	<script type="text/javascript" src="/Public/mobile/js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="/Public/mobile/js/public.js"></script>
</head>
<body>
	<!-- 头部 -->
	<div class="y_header">
		<div class="y_nav_icon">
			<img src="/Public/mobile/img/y_nav_icon.png">
		</div>
		<a class="y_title">
			<img src="/Public/mobile/img/logo.png">
			<h3>企业联盟云商会</h3>
		</a>
	</div>
	<!-- 侧边栏 -->
	<div class="slide_menu">
		<ul>
			<li>
				<a href="index.html" class="on">
					<span><img src="/Public/mobile/img/slide_icon2.png">首页</span>
					<i></i>
				</a>
			</li>
			<li>
				<a href="about.html">
					<span><img src="/Public/mobile/img/slide_icon3.png">关于商会</span>
					<i></i>
				</a>
			</li>
			<li>
				<a href="information.html">
					<span><img src="/Public/mobile/img/slide_icon4.png">商会资讯</span>
					<i></i>
				</a>
			</li>
			<li>
				<a href="advantage.html">
					<span><img src="/Public/mobile/img/slide_icon5.png">加入优势</span>
					<i></i>
				</a>
			</li>
			<li>
				<a href="contact.html">
					<span><img src="/Public/mobile/img/slide_icon6.png">联系我们</span>
					<i></i>
				</a>
			</li>
		</ul>
	</div>
	<div class="y_content">
		<!-- banner -->
		<div class="swiper-container">
		  <div class="swiper-wrapper">
		    <div class="swiper-slide "><img src="/Public/mobile/img/banner1.png"></div>
		    <div class="swiper-slide "><img src="/Public/mobile/img/banner1.png"></div>
		    <div class="swiper-slide "><img src="/Public/mobile/img/banner1.png"></div>
		  </div>
		</div>
		<!-- 关于商会 -->
		<div class="y_about_txt">
			<h3 class="y_title">
				<?php echo ($about["title"]); ?>
			</h3>
			<p><?php echo ($about["content"]); ?></p>
			<a href="about.html">查看更多</a>
		</div>
		<!-- 商会理念 -->
		<div class="y_idea">
			<h3 class="y_title">
				<?php echo ($linian["title"]); ?>
			</h3>
			<p><?php echo ($linian["content"]); ?></p>
		</div>
		<!-- 加入优势 -->
		<div class="y_advantage">
			<div class="y_title">
				<span><?php echo ($jiaru["title"]); ?></span>
				<a href="advantage.html">详情查看</a>
			</div>
			<ul>
				<li>
					<a href="join.html">
						<div class="img">
							<img src="<?php echo ($jiaru["thumb"]); ?>">
						</div>
						<h3>
							<?php echo ($jiaru["content"]); ?>
						</h3>
					</a>
				</li>
			</ul>
		</div>
		<!-- 商会资讯  -->
		<div class="y_message">
			<div class="y_title">
				<span>商会资讯</span>
				<a href="information.html">更多</a>
			</div>
			<ul>
				<?php if(is_array($zixun)): foreach($zixun as $key=>$vv): ?><li>
					<a href="/Mobile/information_detail?article_id=<?php echo ($vv["article_id"]); ?>">
						<div class="img">
							<img src="<?php echo ($vv["thumb"]); ?>">
						</div>
						<div class="txt">
							<h3><?php echo ($vv["title"]); ?></h3>
							<p><?php echo ($vv["content"]); ?></p>
							<span><?php echo ($vv["click"]); ?> 次浏览</span>
						</div>
					</a>
				</li><?php endforeach; endif; ?>
			</ul>
		</div>
		<!-- 最新动态  -->
		<div class="y_message">
			<div class="y_title">
				<span>最新动态</span>
				<a href="information.html">更多</a>
			</div>
			<ul>
				<?php if(is_array($dongtai)): foreach($dongtai as $key=>$v): ?><li>
					<a href="/Mobile/information_detail?article_id=<?php echo ($v["article_id"]); ?>">
						<div class="img">
							<img src="<?php echo ($v["thumb"]); ?>" >
						</div>
						<div class="txt">
							<h3><?php echo ($v["title"]); ?></h3>
							<p><?php echo ($v["content"]); ?></p>
							<span><?php echo ($v["click"]); ?> 次浏览</span>
						</div>
					</a>
				</li><?php endforeach; endif; ?>
			</ul>
		</div>
		<!--  商会承诺 -->
		<div class="y_message">
			<div class="y_title">
				<span>商会承诺</span>
				<!-- <a href="information.html">详情查看</a> -->
			</div>
			<ul>
				<li>
					<a href="javascript:;">
						<div class="img">
							<img src="<?php echo ($chengnuo["thumb"]); ?>" >
						</div>
						<div class="txt">
							<h3><?php echo ($chengnuo["title"]); ?></h3>
							<p><?php echo ($chengnuo["content"]); ?></p>
							<!-- <span>451 次浏览</span> -->
						</div>
					</a>
				</li>
			</ul>
		</div>
		<div class="y_bottom">
			<p>云狄网络版权所有</p>
			<p>粤ICP备16076354号</p>
		</div>
	</div>
	<!-- 底部导航 -->
	<div class="y_footer">
		<a href="http://www.yundi88.com/Mobile/Index/index.html">
			<img src="/Public/mobile/img/y_footer_icon1.png">
			<span>云狄网</span>
		</a>
		<a href="http://spectrum.yundi88.com/Mobile/index">
			<img src="/Public/mobile/img/y_footer_icon2.png">
			<span>企业云谱</span>
		</a>
		<a href="#">
			<img src="/Public/mobile/img/y_footer_icon3.png">
			<span>服务咨询</span>
		</a>
		<a href="join.html">
			<img src="/Public/mobile/img/y_footer_icon4.png">
			<span>加入云商</span>
		</a>
	</div>
	<div class="backtop">
		<img src="/Public/mobile/img/backtop.png">
	</div>
</body>

<script src="/Public/mobile/js/swiper.min.js"></script>
<script type="text/javascript">
  var mySwiper = new Swiper('.swiper-container',{
    loop: true,
	autoplay: 3000,
	autoplayDisableOnInteraction : false
  });
</script>
</html>
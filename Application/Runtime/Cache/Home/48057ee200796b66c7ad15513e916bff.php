<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" /> 
	<title>加入商会</title>
	<link rel="stylesheet" type="text/css" href="/Public/mobile/css/join.css">
	<link rel="stylesheet" type="text/css" href="/Public/mobile/css/landscape.css">
	<script type="text/javascript" src="/Public/mobile/js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="/Public/mobile/js/join.js"></script>
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
		<!-- company_message -->
		<form class="company_message" onsubmit="return checkForm();" id="userform">
			<h2>
				欢迎您加入企业联盟云商会！</br>填写好以下资料，我们将安排客服专员一对一进行服务。
			</h2>
			<p class="tip">
				
			</p>
			<div id="sex">
				<span>称呼</span>
				<div>
					<label>
						<input type="radio" checked="checked" name="sex" value="1">
						<span>先生</span>
					</label>
					<label>
						<input type="radio" name="sex" value="2">
						<span>女士</span>
					</label>
				</div>
			</div>
			<div class="message_list">
				
				<div id="company_name">
					<span>企业名称</span>
					<input type="text" name="storename" placeholder="4-16位数的企业名称" onblur="check_company_name()"></input>
				</div>
				<div id="user">
					<span>账号</span>
					<input type="text" name="sellername" placeholder="字母开头6-16位数字和英文" onblur="check_user();"></input>
				</div>
				<div id="password">
					<span>密码</span>
					<input type="password" name="password" placeholder="6-16位数字和英文" onblur="check_password();"></input>
				</div>
				<div id="user_name">
					<span>昵称</span>
					<input type="text" name="nickname" placeholder="由字母开头6-16位数字、英文或下划线" onblur="check_user_name();"></input>
				</div>
				<div id="mobile">
					<span>手机号码</span>
					<input type="text" name="username" placeholder="请输入手机号码" onblur="check_telephone();"></input>
				</div>
				<div id="check">
					<span>验证码</span>
					<button class="code">获取验证码</button>
					<input type="text" name="code" placeholder="请输入您的验证码" id="code"></input>

				</div>
			</div>
			<button type="submit" class="submit">提交</button>
		</form>
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

</html>
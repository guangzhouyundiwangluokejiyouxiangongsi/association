<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>留言板</title>
	<link rel="shortcut icon" href="/Public/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="/Public/pc/css/messageboard2.css">
	<script type="text/javascript" src="/Public/pc/js/jquery-1.7.2.min.js"></script>
</head>
<body class="basic-grey">
	<form action="<?php echo U('/Home/message');?>" method="post" class="STYLE-NAME">
		<h1>云商会升级维护中，请留下你的联系方式，我们会尽快与您取得联系。谢谢！</h1>
		<label>
			<span>姓名：</span>
			<input id="name" type="text" name="name" placeholder="请填写您的姓名" />
		</label>
		<label>
			<span>手机号码：</span>
			<input id="phone" type="phone" name="phone" placeholder="请填写您的手机号码" />
		</label>
		<label>
			<span>QQ：</span>
			<input id="qq" type="qq" name="qq" placeholder="请填写您的QQ" />
		</label>
		<label>
			<span>邮箱：</span>
			<input id="email" type="email" name="email" placeholder="请填写您的邮箱" />
		</label>
		<label>
			<span>建议：</span>
			<textarea id="message" name="message" placeholder="请填写您的建议(200字以内)"></textarea>
		</label>
		<label>
			<span>&nbsp;</span>
			<input type="button" class="button" value="提交" />
		</label>
	</form>
</body>
<script>
	$('.button').click(function(){
		var mobile = /^1[3|4|5|7|8][0-9]{9}$/;
		var qq = /^\d{5,10}$/;
		var email = /^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/;
		if ($('#phone').val()){
			if (!mobile.test($('#phone').val())){
				alert('手机号码格式错误');
				return false;
			}
		}
		if ($('#qq').val()){
			if (!qq.test($('#qq').val())){
				alert('qq号码格式错误!');
				return false;
			}
		}
		if ($('#email').val()){
			if (!email.test($('#email').val())){
				alert('邮箱号码格式错误!');
				return false;
			}
		}
		if (!$('#name').val()){
			alert('姓名不能为空!');
			return false;
		}
		if (!$('#message').val()){
			alert('请填写您的建议!');
			return false;
		}
		if (!$('#phone').val() && !$('#qq').val() && !$('#email').val()){
			alert('电话、QQ、邮箱必填一个!');
			return false;
		}
		$('.STYLE-NAME').submit();
	});
</script>
</html>
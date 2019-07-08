<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"F:\phpStudy\WWW\tp5.0.24\public/../apps/index\view\login\login.html";i:1562577334;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <meta name="author" content="order by dede58.com"/>
		<title>会员登录</title>
		<link rel="stylesheet" type="text/css" href="/static/index/css/login.css">
		
	</head>
	<body>
		<!-- login -->
		<div class="top center">
			<div class="logo center">
				<a href="<?php echo url('Index/index'); ?>" target="_blank"><img src="/static/index/img/mistore_logo.png" alt=""></a>
			</div>
		</div>
		<form  method="post" action="<?php echo url('Login/login'); ?>" class="form center">
		<div class="login">
			<div class="login_center">
				<div class="login_top">
					<div class="left fl">会员登录</div>
					<div class="right fr">您还不是我们的会员？<a href="<?php echo url('Reg/index'); ?>" target="_self">立即注册</a></div>
					<div class="clear"></div>
					<div class="xian center"></div>
				</div>
				<div class="login_main center">
					<div class="username">用户名:&nbsp;<input class="shurukuang" type="text" name="username" placeholder="请输入你的用户名"/></div>
					<div class="username">密&nbsp;&nbsp;&nbsp;&nbsp;码:&nbsp;<input class="shurukuang" type="password" name="password" placeholder="请输入你的密码"/></div>
					<div class="username">
						<div class="left fl">验证码:&nbsp;<input class="yanzhengma" type="text" name="code" placeholder="请输入验证码"/></div>
						<div class="right fl"><img src="<?php echo captcha_src(); ?>" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random()"></div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="login_submit">
					<input class="submit" type="submit" name="submit" value="立即登录" >
				</div>
				
			</div>
		</div>
		</form>
		<footer>
			<div class="copyright">简体 | 繁体 | English | 常见问题</div>
			<div class="copyright">小米公司版权所有-京ICP备10046444-<img src="/static/index/img/ghs.png" alt="">京公网安备11010802020134号-京ICP证110507号</div>
		</footer>
	</body>
</html>
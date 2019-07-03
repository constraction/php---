<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>学生成绩记录系统</title>
<script type="application/x-javascript">addEventListener("load", function(){ setTimeout(hideURLbar, 0);}, false);function hideURLbar(){ window.scrollTo(0,1); }</script>
<script type="text/javascript" src="/Public/js/metaer.js"></script>
<script type="text/javascript" src="/Public/js/linker.js"></script>
</head>
<body>
<script type="text/javascript" src="/Public/js/header.js"></script>
<h1>学生成绩记录系统</h1>
<div class="main-agileits">
<!--form-stars-here-->
		<div class="form-w3-agile">
			<h2 class="sub-agileits-w3layouts">登录</h2>
			<form action="<?php echo U('Login/login');?>" method="post">
					<input type="text" name="Username" placeholder="用户名" required="" />
					<input type="password" name="Password" placeholder="密码" required="" />
					<input type="text" name="code" id="code" placeholder="验证码" required=""> 
					<img src="<?php echo U('Login/verify');?>" alt="验证码"  title="看不清？换一张！" onclick="this.src='<?php echo U("Login/verify");?>?' +Math.random() "><img>
					<a href="<?php echo U('Forgot/index');?>" class="forgot-w3layouts">忘记密码 ？</a>
				<div class="submit-w3l">
					<input type="submit" value="登录">
				</div>
				<p class="p-bottom-w3ls">如果你没有账号来<a href="../Reg/index">这里注册一个</a></p>
			</form>
		</div>
		</div>
<!--//form-ends-here-->
<script type="text/javascript" src="/Public/js/footer.js"></script>
</body>
<script type="text/javascript">
	$(function(){
		var session="<?php echo (session('name')); ?>";
		if (session) {
			$('.top-buttons-agileinfo').hide();
			$('.top-heads-box').show();
			var htmlstring="<a href=' class='head'><img src='/Public/img/banner.jpg' alt='头像' width='45px' height='45px' class='head'></a>";
			$('.top-heads-box').html(htmlstring);
		} else {
			$('.top-buttons-agileinfo').show();
			$('.top-heads-box').hide();
		}
	});
</script>
</html>
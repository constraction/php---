<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>学生成绩记录系统</title>
<script type="text/javascript" src="/Public/js/metaer.js"></script>
<script type="text/javascript" src="/Public/js/linker.js"></script>
</head>
<body>
<script type="text/javascript" src="/Public/js/header.js"></script>
<h1>学生成绩记录系统</h1>
<div class="main-agileits">
<!--form-stars-here-->
		<div class="form-w3-agile">
			<h2 class="sub-agileits-w3layouts">注册</h2>
			<form action="<?php echo U('Reg/signup');?>" method="post">
					<input type="text" name="Username" placeholder="姓名" required="" />
					<input type="password" name="Password1" placeholder="密码" required="" />
					<input type="password" name="Password2" placeholder="重复密码" required="" />
					<input type="text" name="code" id="code" placeholder="验证码" required=""> 
					<img src="<?php echo U('Login/verify');?>" alt="验证码"  title="看不清？换一张！" onclick="this.src='<?php echo U("Login/verify");?>?' +Math.random() "><img>
				<div class="submit-w3l">
					<input type="submit" value="注册">
				</div>
				<p class="p-bottom-w3ls">如果你有账号来<a href="../Login/index">这里登录</a></p>
			</form>
		</div>
		</div>
<!--//form-ends-here-->
<!-- copyright -->
<script type="text/javascript" src="/Public/js/footer.js"></script>
</body>
</html>
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
<!--表单-这里-开始-->
		<div class="form-w3-agile">
			<h2 class="sub-agileits-w3layouts">修改个人信息</h2>
			<form method="post">
                <input type="text" name="name" placeholder="姓名" required="" value="<?php echo (session('name')); ?>"><br>
                <input type="text" name="sex" placeholder="性别" required=""> <br>
                <input type="text" name="grade" placeholder="年级" required=""><br>
                <input type="text" name="class" placeholder="班级" required=""><br>
                <input type="text" name="phone" placeholder="电话" required=""><br>
                <input type="email" name="mail" placeholder="邮箱" required=""><br>
					<!-- <a href="<?php echo U('Forgot/index');?>" class="forgot-w3layouts">忘记密码 ？</a> -->
				<div class="submit-w3l">
					<input type="submit" value="修改" formaction="<?php echo U('Inform/updata');?>">
				</div>
				<p class="p-bottom-w3ls">点击这里返回<a href="../Show/index">成绩单</a></p>
			</form>
		</div>
		</div>
<!--表单-这里-结束-->
<!-- copyright -->
<script type="text/javascript" src="/Public/js/footer.js"></script>
</body>
<script type="text/javascript">
	$(function(){
		var session="<?php echo (session('name')); ?>";
		if (session) {
			$('.top-buttons-agileinfo').hide();
			$('.top-heads-box').show();
		} else {
			$('.top-buttons-agileinfo').show();
			$('.top-heads-box').hide();
		}
	});
</script>
</html>
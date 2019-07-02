<?php if (!defined('THINK_PATH')) exit();?><!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        姓名：<input type="text" name="name" value="<?php echo (session('name')); ?>"><br>
        性别：<input type="text" name="sex"> <br>
        年级：<input type="text" name="grade"><br>
        班级：<input type="text" name="class"><br>
        电话：<input type="tel" name="phone"><br>
        邮箱：<input type="email" name="mail"><br>
        <input type="submit" value="修改" formaction="<?php echo U('Inform/insert_insert');?>">
    </form>
    <a href="../Show/index">返回成绩单</a>
</body>
</html> -->
<!DOCTYPE html>
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
					<input type="submit" value="修改" formaction="<?php echo U('Inform/insert_insert');?>">
				</div>
				<p class="p-bottom-w3ls">点击这里返回<a href="../Show/index">成绩单</a></p>
			</form>
		</div>
		</div>
<!--表单-这里-结束-->
<!-- copyright -->
<script type="text/javascript" src="/Public/js/footer.js"></script>
</body>
</html>
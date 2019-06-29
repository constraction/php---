<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
</body>
</html>
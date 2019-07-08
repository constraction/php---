<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"F:\phpStudy\WWW\tp5.0.24\public/../apps/admin\view\welcome\welcome.html";i:1562316166;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo \think\Session::get('name'); ?>,欢迎!</title>
</head>
<body>
    <h1>欢迎你，<?php echo \think\Session::get('name'); ?>！</h1>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=100%, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../../Public/css/TablePractice.css">
    <title>Document</title>
</head>
<body>
    <form>
        <div>
            <table>
                <thead>
                        <tr>
                                <th>姓名</th>
                                <th>语文</th>
                                <th>数学</th>
                                <th>英语</th>
                                <th>物理</th>
                                <th>化学</th>
                                <th>生物</th>
                                <th>政治</th>
                                <th>历史</th>
                                <th>地理</th>
                            </tr>
                </thead>
                <?php echo U('Show/result');?>
            </table>
        </div>
    </form>
</body>
</html>
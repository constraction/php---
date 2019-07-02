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
            语    文：<input type="text" name="chinese" ><br>
            数    学：<input type="text" name="math"><br>
            英    语：<input type="text" name="english"><br>
            物    理：<input type="text" name="physical"><br>
            化    学：<input type="text" name="chemical"><br>
            生    物：<input type="text" name="biological"><br>
            政    治：<input type="text" name="political"><br>
            历    史：<input type="text" name="history"><br>
            地    理：<input type="text" name="geographic"><br>
            <input type="submit" value="添加信息" formaction="<?php echo U('Inform/grade_insert');?>">
    </form>
</body>
</html>
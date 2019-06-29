<?php if (!defined('THINK_PATH')) exit();?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=100%, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='../../../../Public/css/TablePractice.css'>
    <title>Document</title>
</head>
<body>
    <div class="do">
        <form>
            <!-- <input type="submit" value="求和" formaction="<?php echo U('Table/sum');?>">
            <input type="submit" value="求平均数" formaction="<?php echo U('Table/ave');?>">
            <input type="submit" value="排序" formaction="<?php echo U('Table/sort');?>"> -->
        </form>
    </div>
</body>
<script src="/Public/js/jquery-3.4.1.js"></script>
    <script type="text/javascript">
        $(function () { 
            $("#do").append("");
         });
    </script>
</html>
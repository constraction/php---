<?php if (!defined('THINK_PATH')) exit();?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=100%, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='../../../../Public/css/TablePractice.css'>
    <title>Document</title>
    <script src="/Public/js/jquery-3.4.1.js"></script>
    <script type="text/javascript">
        $(function ()
        {  $("#dick").click(function ()
            {
                $('#dick').hide();
                $('#tr_2').show("<?php echo U('Table/all');?>");
            });
        });
    </script>
</head>
<body>
    <div class="do">
        <table marginwight="0,0">
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
                    <th>总分</th>
                    <th>平均分</th>
                </tr>
            </thead>
            <tbody>
                <tr id="tr_2">
                    <td id="dick"> 点我</td>
                </tr>
            </tbody>
        </table>
        <form>
            <input type="submit" value="求和" formaction="<?php echo U('Table/sum');?>">
            <input type="submit" value="求平均数" formaction="<?php echo U('Table/ave');?>">
            <input type="submit" value="排序" formaction="<?php echo U('Table/sort');?>">
        </form>
    </div>
</body>
</html>
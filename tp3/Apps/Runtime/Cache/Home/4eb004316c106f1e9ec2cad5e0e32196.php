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
                    <h2 class="sub-agileits-w3layouts">新增个人成绩</h2>
                    <form method="post">
                        <input type="text" name="chinese"  placeholder="语文"><br>
                        <input type="text" name="math" placeholder="数学"><br>
                        <input type="text" name="english" placeholder="英语"><br>
                        <input type="text" name="writing" placeholder="文综"><br>
                        <input type="text" name="science" placeholder="理综"><br>
                        <input type="text" name="biological" placeholder="生物"><br>
                        <div class="submit-w3l">
                            <input type="submit" value="添加信息" formaction="<?php echo U('Inform/ginsert');?>">
                        </div>
                        <p class="p-bottom-w3ls">点击这里返回<a href="../Show/index">成绩单</a></p>
                    </form>
                </div>
                </div>
<!--//form-ends-here-->
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
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>学生成绩记录系统</title>
<script type="application/x-javascript">addEventListener("load", function(){ setTimeout(hideURLbar, 0);}, false);function hideURLbar(){ window.scrollTo(0,1); }</script>
<script type="text/javascript" src="/Public/js/metaer.js"></script>
<script type="text/javascript" src="/Public/js/linker.js"></script>
</head>
<body>
<script type="text/javascript" src="/Public/js/header.js"></script>
<h1>学生成绩记录系统</h1>
<div class="main-agileits">
<!--form-stars-here-->
		<div class="form-w3-agile">
			<h2 class="sub-agileits-w3layouts"><?php echo (session('name')); ?>的成绩单</h2>
				<form method="post">
					<div>
						<iframe src="<?php echo U('Show/table');?>" frameborder="1" marginwight="0,0" width="620px"></iframe>
					</div>
					<div class="submit-w3l">
						<input type="submit" value="注销登录" formaction="<?php echo U('Show/result');?>">
					</div>
					<p class="p-bottom-w3ls"><a href="../Inform/index">查看个人信息</a></p>
					<p class="p-bottom-w3ls"><a href="../Inform/updata_index">修改个人信息</a></p>
					<p class="p-bottom-w3ls">如果没有成绩，请<a href="../Inform/gindex">添加成绩信息</a></p>
				</form>
		</div>
		</div>
<!--//form-ends-here-->
<script type="text/javascript" src="/Public/js/footer.js"></script>
</body>
<script type="text/javascript">
	$(function(){
		var session="<?php echo (session('name')); ?>";
		if (session) {
			$('.top-buttons-agileinfo').hide();
			$('.top-heads-box').show();
			var htmlstring="<a href=' class='head'><img src='/Public/img/banner.jpg' alt='头像' width='45px' height='45px' class='head'></a>";
			$('.top-heads-box').html(htmlstring);
		} else {
			$('.top-buttons-agileinfo').show();
			$('.top-heads-box').hide();
		}
	});
</script>
</html>
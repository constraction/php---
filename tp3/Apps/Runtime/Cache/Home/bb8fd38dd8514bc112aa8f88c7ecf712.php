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
			<h2 class="sub-agileits-w3layouts"><?php echo (session('name')); ?>的成绩单</h2>
				<form method="post">
					<div>
						<iframe src="<?php echo U('Show/table');?>" frameborder="1" marginwight="0,0" width="620px"></iframe>
					</div>
					<div class="submit-w3l">
						<input type="submit" value="注销登录" formaction="<?php echo U('Show/result');?>">
					</div>
					<p class="p-bottom-w3ls"><a href="../Inform/insert_index">修改个人信息</a></p>
					<p class="p-bottom-w3ls"><a href="../Inform/index">查看个人信息</a></p>
					<p class="p-bottom-w3ls">如果没有成绩，请<a href="../Inform/grade_index">添加成绩信息</a></p>
				</form>
		</div>
		</div>
<!--//form-ends-here-->
<!-- copyright -->
<script type="text/javascript" src="/Public/js/footer.js"></script>
</body>
</html>
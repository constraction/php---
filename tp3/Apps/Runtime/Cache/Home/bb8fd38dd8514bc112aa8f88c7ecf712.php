<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>学生成绩记录系统</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Internship Sign In & Sign Up Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript">
	addEventListener("load", function() 
	 	{ 
			setTimeout(hideURLbar, 0); 
		}, false); 
	function hideURLbar()
	{ 
		window.scrollTo(0,1); 
	}
 </script>
<!-- Custom Theme files -->
<link href="/Public/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="/Public/css/snow.css" rel="stylesheet" type="text/css" media="all" />
<link href="/Public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel='stylesheet' href='../../../../Public/css/TablePractice.css'>
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- //web font -->
</head>
<body>
<div class="snow-container">
			  <div class="snow foreground"></div>
			  <div class="snow foreground layered"></div>
			  <div class="snow middleground"></div>
			  <div class="snow middleground layered"></div>
			  <div class="snow background"></div>
			  <div class="snow background layered"></div>
			</div>

<div class="top-buttons-agileinfo">
<!-- <a href="../Login/index"  class="active">登录</a><a href="../Reg/index">注册</a> -->
</div>
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
	<div class="copyright w3-agile">
		<p> © 2019 Internship Sign In & Sign Up Form . All rights reserved | Design by xmoban.cn</p>
	</div>
	<!-- //copyright --> 
	<script type="text/javascript" src="/Public/js/jquery-2.1.4.min.js"></script>
</body>
</html>
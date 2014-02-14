<!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- 最新 Bootstrap 核心 CSS 文件 -->
		<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">

		<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
		<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>

		<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
		<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
	</head>
	<body style="font-family:Microsoft YaHei;font-size:16">
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<!--
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					  <span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
					-->
					<a class="navbar-brand" style="font-size:40" href="/">微信管理后台</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
					  <li><a href="/">当前公共帐号</a></li>
					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">选择公共账号 <b class="caret"></b></a>
						<ul class="dropdown-menu">
						  <li><a href="#">Action</a></li>
						  <li><a href="#">Another action</a></li>
						  <li><a href="#">Something else here</a></li>
						  <li class="divider"></li>
						  <li><a href="#">Separated link</a></li>
						  <li class="divider"></li>
						  <li><a href="#">One more separated link</a></li>
						</ul>
					  </li>
					  <li><a href="/account">公共帐号设置</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
					  <li><a href="/user">当前登录用户</a></li>
					  <li><a href="/user/logout">退出</a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
		</div>
		<div class="container" style="margin-top:70px">
			<div class="row-fluid">
				<div class="col-lg-6 col-lg-offset-3 well well-lg">
        <div class="alert alert-<?php echo $data['type']?>"><?php echo $data['info'] ?></div>
        <script type="text/javascript">
          function jump(){
            location="<?php echo $data['callBackUrl'];?>";
          }
          setTimeout('jump()',3000);
        </script>
				</div>
			</div>
		</div>
	</body>
</html>

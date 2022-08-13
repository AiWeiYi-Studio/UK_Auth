<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title><?php echo $conf['title']?> -  源码下载</title>
<link rel="icon" href="../assets/imgs/favicon.ico" type="image/ico">
<meta name="keywords" content="<?php echo $conf['keywords']; ?>"/>
<meta name="description" content="<?php echo $conf['description']?>">
    <link href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.css" rel="stylesheet">
    <script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/appui/css/main.css">
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="qrlogin.js?ver=1004"></script>
</head>
<body>
<img src="<?php echo $conf['getbjapi']?>" alt="Full Background" class="full-bg full-bg-bottom animation-pulseSlow">
<nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">导航按钮</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./">源码下载</a>
      </div><!-- /.navbar-header -->
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="../user/login.php"><span class="glyphicon glyphicon-user"></span>用户登录</a>
          </li>
          </li>
		  <li class="active"><a href="../user/reg.php"><span class="glyphicon glyphicon-thumbs-up"></span>用户注册</a>
		  </li>
		  </li>
          <li><a href="../"><span class="glyphicon glyphicon-log-out"></span>正版查询</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav><!-- /.navbar -->
  <div class="container" style="padding-top:70px;">
<div class="container">
<div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 center-block" style="float: none;">
<div class="panel panel-primary">
	<div class="panel-heading" style="text-align: center;"><h3 class="panel-title">自助扫码下载最新源码
	</div>
	<div class="panel-body" style="text-align: center;">
		<div class="list-group">
			<div class="list-group-item">请使用你购买授权时的QQ扫描以下二维码，通过验证后即可下载更新包&安装包，扫码前需要关闭QQ网页保护。或者你也可以联系客服获取源码。</div>
			<div class="list-group-item list-group-item-info" style="font-weight: bold;" id="login">
				<span id="loginmsg">使用QQ手机版扫描二维码</span><span id="loginload" style="padding-left: 10px;color: #790909;">.</span>
			</div>
			<div class="list-group-item" id="qrimg">
			</div>
            <div class="list-group-item" id="mobile" style="display:none;"><button type="button" id="mlogin" onclick="mloginurl()" class="btn btn-info btn-block">跳转QQ快捷登录</button></div>
            <div class="list-group-item" id="submit"><a href="#" onclick="loadScript();" class="btn btn-block btn-primary">点此验证</a></div>
		</div>
	</div>
</div>
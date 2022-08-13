<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title><?php echo $conf['title']?></title>
<link rel="icon" href="./assets/imgs/favicon.ico" type="image/ico">
<meta name="keywords" content="<?php echo $conf['keywords']; ?>"/>
<meta name="description" content="<?php echo $conf['description']?>">
<meta name="author" content="UK云工作室">
<link href="http://lyear.itshubao.com/css/bootstrap.min.css" rel="stylesheet">
<link href="http://lyear.itshubao.com/css/materialdesignicons.min.css" rel="stylesheet">
<link href="http://lyear.itshubao.com/css/style.min.css" rel="stylesheet">
<script src="//lib.baomitu.com/jquery/1.12.4/jquery.min.js"></script>
<script src="//lib.baomitu.com/layer/2.3/layer.js"></script>
</head>
<body>
<div class="lyear-layout-web">
  <div class="lyear-layout-container">
    <!--左侧导航-->
    <aside class="lyear-layout-sidebar">
      
      <!-- logo -->
      <div id="logo" class="sidebar-header">
        <a href="index.php"><img src="../assets/imgs/logo.png" title="<?php echo $conf['title']?>" alt="<?php echo $conf['title']?>" /></a>
      </div>
      <div class="lyear-layout-sidebar-scroll"> 
        
        <nav class="sidebar-main">
          <ul class="nav nav-drawer">
            <li class="nav-item active"> 
            <a href="user/reg.php">
            用户注册</a> 
            </li>
            <li class="nav-item"> 
            <a href="user/login.php">
            管理登陆</a> 
            </li>
            <li class="nav-item"> 
            <a href="user/dlcx.php">
           代理查询</a> 
            </li>
            <li class="nav-item"> 
            <a href="downfile.php">
            源码下载</a> 
            </li>
          </ul>
        </nav>
        
        <div class="sidebar-footer">
          <p class="copyright">Copyright&copy;<?php echo $conf['title']?></p>
        </div>
      </div>
      
    </aside>
    <!--End 左侧导航-->
    
    <!--头部信息-->
    <header class="lyear-layout-header">
      
      <nav class="navbar navbar-default">
        <div class="topbar">
          
          <div class="topbar-left">
            <div class="lyear-aside-toggler">
              <span class="lyear-toggler-bar"></span>
              <span class="lyear-toggler-bar"></span>
              <span class="lyear-toggler-bar"></span>
            </div>
            <span class="navbar-page-title"> 后台首页 </span>
          </div>
        </div>
      </nav>
      
    </header>
    <!--End 头部信息-->
<main class="lyear-layout-content">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="card">
<ul class="nav nav-tabs page-tabs">
<li class="active"> <a href="">正版查询</a> </li>
<li> <a href="user/dlcx.php">代理查询</a> </li>
<li> <a href="get">源码下载</a> </li>
</ul>
<div class="tab-content">
<div class="tab-pane active">
<div>
</div>
</div>
<div class="form-group">
<label for="web_site_title">输入域名</label>
<form action="?" method="get" name="auth">
<input type="text" class="form-control" name="url" onkeyup="checkURL();" placeholder="请输入需要查询的域名" required><br>
<hr/>
<button type="submit" class="btn btn-primary btn-block">点击查询</button><br>
<hr/>
<center>
<?php
if($url=addslashes($_GET['url'])) {
	//echo '<label>查询域名:<font color="#FF00FF">'.$url.'</label></font>';
	//echo '<label>base64:<font color="#FF0000">'.base64_encode($url).'</label></font>';
	//echo '<label>MD5:<font color="#0000FF">'.MD5($url).'</label></font>';
	if(checkauthurl($url)) {
		echo '<div class="alert alert-success"><b>您所查询的网址：<font color="#FF00FF">'.$url.'</b></font><br></br><b>查询结果：<font color="#0000FF">正版程序</b></font></div><hr>';
	}else{
		echo '<div class="alert alert-danger"><b>您所查询的网址：<font color="#FF00FF">'.$url.'</b></font><br></br><b>查询结果：<font color="#FF0000">非正版授权</b></font></div><hr>';
	}
}
$DB->close();
?></center>
<h4><font color="#FF0000">更新详情:</font></h4>
<?php echo $conf['uplog']?>
</div></div>
<script type="text/javascript" src="http://lyear.itshubao.com/js/jquery.min.js"></script>
<script type="text/javascript" src="http://lyear.itshubao.com/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://lyear.itshubao.com/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="http://lyear.itshubao.com/js/main.min.js"></script>

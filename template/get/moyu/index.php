<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title><?php echo $conf['title']?> -  源码下载</title>
<link rel="icon" href="../assets/imgs/favicon.ico" type="image/ico">
<meta name="keywords" content="<?php echo $conf['keywords']; ?>"/>
<meta name="description" content="<?php echo $conf['description']?>">
  <link href="//cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="//cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="../assets/appui/css/main.css">
  <link rel="stylesheet" href="../assets/appui/css/themes.css">
  <script src="//cdn.staticfile.org/modernizr/2.8.3/modernizr.min.js"></script>
  <script src="//cdn.staticfile.org/jquery/2.1.4/jquery.min.js"></script>
  <script src="//cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../assets/appui/js/plugins.js"></script>
  <script src="../assets/appui/js/app2.js"></script>
    <script src="//lib.baomitu.com/layer/2.3/layer.js"></script>
  <!--[if lt IE 9]>
    <script src="//cdn.staticfile.org/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<img src="<?php echo $conf['getbjapi']?>" alt="Full Background" class="full-bg full-bg-bottom animation-pulseSlow">
<?php
if(isset($_GET['url'])) {
$url=daddslashes($_GET['url']);
$qq=daddslashes($_GET['qq']);
$authcode=daddslashes($_GET['authcode']);
$row1=$DB->get_row("SELECT * FROM auth_site WHERE url='{$url}' limit 1");
$row2=$DB->get_row("SELECT * FROM auth_site WHERE uid='{$qq}' order by id desc limit 1");
$row3=$DB->get_row("SELECT * FROM auth_site WHERE authcode='{$authcode}' limit 1");
if($row1=='')exit("<script language='javascript'>alert('授权平台不存在该域名！');history.go(-1);</script>");
if($row2=='')exit("<script language='javascript'>alert('授权平台不存在该QQ！');history.go(-1);</script>");
if($row3=='')exit("<script language='javascript'>alert('授权平台不存在授权码！');history.go(-1);</script>");
if($row1['active']==0)exit("<script language='javascript'>alert('此域名授权已被封禁！');history.go(-1);</script>");
$authcode=$row1['authcode'];
$uid=$row1['uid'];
$sign=$row1['sign'];
?>
<div class="container" style="padding-top:70px;">
<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
<div class="block">
<div class="block-title"><h3 class="panel-title">源码下载</h3></div>
<div class="card-body">
<li class="list-group-item"><span class="fa fa-qq"></span> <b>授权ＱＱ：</b> <b>  <?=$uid?></b></li>
<li class="list-group-item"><span class="fa fa-cloud"></span> <b>授权域名：</b> <b>  <?=$url?></b></li>
<li class="list-group-item"><span class="fa fa-heart"></span> <b>授权代码：</b> <b>  <?=$authcode?></b></li>
<li class="list-group-item"><span class="fa fa-internet-explorer"></span> <b>特征代码：</b> <b>  <?=$sign?></b></li>
<li class="list-group-item"><span class="fa fa-bars"></span> <b>下载类型：</b> 
<a href="../includes/downfile.php?my=installer&authcode=<?=$authcode?>&sign=<?=$sign?>&r=<?=time()?>" class="btn btn-xs btn-success"><?=$name?>安装包</a>&nbsp;
<a href="../includes/downfile.php?my=updater&authcode=<?=$authcode?>&sign=<?=$sign?>&r=<?=time()?>" class="btn btn-xs btn-primary"><?=$name?>更新包</a>
</li>
</ul>
<div class="panel-footer">
<span class="fa fa-volume-down"></span> 新购用户请下载完整安装包！
</div>
</div>
<?php }else{?>
<!-- Start: Header -->
    <div id="page-wrapper">
        <div id="page-container" class="header-fixed-top sidebar-visible-lg-full enable-cookies">
<div id="sidebar-alt" tabindex="-1" aria-hidden="true">
<a href="javascript:void(0)" id="sidebar-alt-close" onclick="App.sidebar('toggle-sidebar-alt');"><i class="fa fa-times"></i></a>
<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 888px;"><div id="sidebar-scroll-alt" style="overflow: hidden; width: auto; height: 888px;">
<div class="sidebar-content">
<div class="sidebar-section">
<style>
h4{font-family:"微软雅黑",Georgia,Serif;}
</style>
<h4 class="text-light">框架变色(New)</h4>
<br>
<ul class="sidebar-themes clearfix">
<li class="">
<a href="javascript:void(0)" class="themed-background-default" data-toggle="tooltip" title="" data-theme="../assets/appui/css/themes/themes-2.2.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="" data-original-title="">
<span class="section-side themed-background-dark-default"></span>
<span class="section-content"></span>
</a>
</li>
<li class="">
<a href="javascript:void(0)" class="themed-background-classy" data-toggle="tooltip" title="" data-theme="../assets/appui/css/themes/classy-2.4.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="" data-original-title="">
<span class="section-side themed-background-dark-classy"></span>
<span class="section-content"></span>
</a>
</li>
<li class="">
<a href="javascript:void(0)" class="themed-background-social" data-toggle="tooltip" title="" data-theme="../assets/appui/css/themes/social-2.4.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="" data-original-title="">
<span class="section-side themed-background-dark-social"></span>
<span class="section-content"></span>
</a>
</li>
<li class="">
<a href="javascript:void(0)" class="themed-background-flat" data-toggle="tooltip" title="" data-theme="../assets/appui/css/themes/flat-2.4.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="" data-original-title="">
<span class="section-side themed-background-dark-flat"></span>
<span class="section-content"></span>
</a>
</li>
<li class="">
<a href="javascript:void(0)" class="themed-background-amethyst" data-toggle="tooltip" title="" data-theme="../assets/appui/css/themes/amethyst-2.4.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="" data-original-title="">
<span class="section-side themed-background-dark-amethyst"></span>
<span class="section-content"></span>
</a>
</li>
<li class="">
<a href="javascript:void(0)" class="themed-background-creme" data-toggle="tooltip" title="" data-theme="../assets/appui/css/themes/creme-2.4.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="" data-original-title="">
<span class="section-side themed-background-dark-creme"></span>
<span class="section-content"></span>
</a>
</li>
<li class="">
<a href="javascript:void(0)" class="themed-background-passion" data-toggle="tooltip" title="" data-theme="../assets/appui/css/themes/passion-2.4.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="" data-original-title="">
<span class="section-side themed-background-dark-passion"></span>
<span class="section-content"></span>
</a>
<br>
</li>
<li>
<a href="javascript:void(0)" class="themed-background-classy" data-toggle="tooltip" title="" data-theme="../assets/appui/css/themes/classy-2.4.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="sidebar-light" data-original-title="">
<span class="section-side"></span>
<span class="section-content"></span>
</a>
</li>
<li>
<a href="javascript:void(0)" class="themed-background-social" data-toggle="tooltip" title="" data-theme="../assets/appui/css/themes/social-2.4.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="sidebar-light" data-original-title="">
<span class="section-side"></span>
<span class="section-content"></span>
</a>
</li>
<li>
<a href="javascript:void(0)" class="themed-background-flat" data-toggle="tooltip" title="" data-theme="../assets/appui/css/themes/flat-2.4.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="sidebar-light" data-original-title="">
<span class="section-side"></span>
<span class="section-content"></span>
</a>
</li>
<li>
<a href="javascript:void(0)" class="themed-background-amethyst" data-toggle="tooltip" title="" data-theme="../assets/appui/css/themes/amethyst-2.4.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="sidebar-light" data-original-title="">
<span class="section-side"></span>
<span class="section-content"></span>
</a>
</li>
<li>
<a href="javascript:void(0)" class="themed-background-creme" data-toggle="tooltip" title="" data-theme="../assets/appui/css/themes/creme-2.4.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="sidebar-light" data-original-title="">
<span class="section-side"></span>
<span class="section-content"></span>
</a>
</li>
<li>
<a href="javascript:void(0)" class="themed-background-passion" data-toggle="tooltip" title="" data-theme="../assets/appui/css/themes/passion-2.4.css" data-theme-navbar="navbar-inverse" data-theme-sidebar="sidebar-light" data-original-title="">
<span class="section-side"></span>
<span class="section-content"></span>
</a>
</li>

<li class="">
<a href="javascript:void(0)" class="themed-background-classy" data-toggle="tooltip" title="" data-theme="../assets/appui/css/themes/classy-2.4.css" data-theme-navbar="navbar-default" data-theme-sidebar="" data-original-title="">
<span class="section-header"></span>
<span class="section-side themed-background-dark-classy"></span>
<span class="section-content"></span>
</a>
<br>
</li>
<li class="">
<a href="javascript:void(0)" class="themed-background-social" data-toggle="tooltip" title="" data-theme="../assets/appui/css/themes/social-2.4.css" data-theme-navbar="navbar-default" data-theme-sidebar="" data-original-title="">
<span class="section-header"></span>
<span class="section-side themed-background-dark-social"></span>
<span class="section-content"></span>
</a>
</li>
<li>
<a href="javascript:void(0)" class="themed-background-flat" data-toggle="tooltip" title="" data-theme="../assets/appui/css/themes/flat-2.4.css" data-theme-navbar="navbar-default" data-theme-sidebar="" data-original-title="">
<span class="section-header"></span>
<span class="section-side themed-background-dark-flat"></span>
<span class="section-content"></span>
</a>
</li>
<li class="">
<a href="javascript:void(0)" class="themed-background-amethyst" data-toggle="tooltip" title="" data-theme="../assets/appui/css/themes/amethyst-2.4.css" data-theme-navbar="navbar-default" data-theme-sidebar="" data-original-title="">
<span class="section-header"></span>
<span class="section-side themed-background-dark-amethyst"></span>
<span class="section-content"></span>
</a>
</li>
<li class="">
<a href="javascript:void(0)" class="themed-background-creme" data-toggle="tooltip" title="" data-theme="../assets/appui/css/themes/creme-2.4.css" data-theme-navbar="navbar-default" data-theme-sidebar="" data-original-title="">
<span class="section-header"></span>
<span class="section-side themed-background-dark-creme"></span>
<span class="section-content"></span>
</a>
</li>
<li class="">
<a href="javascript:void(0)" class="themed-background-passion" data-toggle="tooltip" title="" data-theme="../assets/appui/css/themes/passion-2.4.css" data-theme-navbar="navbar-default" data-theme-sidebar="" data-original-title="">
<span class="section-header"></span>
<span class="section-side themed-background-dark-passion"></span>
<span class="section-content"></span>
</a>
</li>
</ul>
</div>
</div>
</div><div class="slimScrollBar" style="background: rgb(187, 187, 187); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 888px;"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 1; z-index: 90; right: 1px;"></div></div>
</div>
            <div id="sidebar">
                <div id="sidebar-brand" class="themed-background">
                	<a href="./" class="sidebar-title">
                    <i class="fa fa-cube"></i> <span class="sidebar-nav-mini-hide">管理后台</span>
                </a>
				</div>
                <div id="sidebar-scroll">
                    <div class="sidebar-content">
                        <ul class="sidebar-nav">
<li>
	<a class="<?php echo checkIfActive('login')?>" href="./login.php?logout">
		<i class="fa fa-sign-out sidebar-nav-icon"></i>
		<span class="sidebar-nav-mini-hide">代理查询</span>
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive('index,')?>" href="../">
		<i class="fa fa-home sidebar-nav-icon"></i>
		<span class="sidebar-nav-mini-hide">正版查询</span>
	</a>
</li>

<li>
	<a class="<?php echo checkIfActive('list')?>" href="./list.php">
		<i class="fa fa-list sidebar-nav-icon"></i>
		<span class="sidebar-nav-mini-hide">用户后台</span>
	</a>
</li>
<li>
<a class="<?php echo checkIfActive('password')?>" href="./password.php">
<i class="fa fa-globe sidebar-nav-icon"></i>
<span class="sidebar-nav-mini-hide">用户注册</span>
	</a>
</li>


                        </ul>
                    </div>
                </div>
                <div id="sidebar-extra-info" class="sidebar-content sidebar-nav-mini-hide">
<div class="progress progress-mini push-bit">
<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
</div><div class="text-center">
<small><span id="year-copy"></span>© <?php echo $conf["title"]?><a href="/"></a></small>
</div>
</div>
            </div>
            <div id="main-container">
                <header class="navbar navbar-inverse navbar-fixed-top">
 
<ul class="nav navbar-nav-custom">
 
<li>
<a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
<i class="fa fa-ellipsis-v fa-fw animation-fadeInRight" id="sidebar-toggle-mini"></i>
<i class="fa fa-bars fa-fw animation-fadeInRight" id="sidebar-toggle-full"></i>菜单
</a>
</li>
<li>
<a href="javascript:void(0)" onclick="javascript:history.go(-1);">
<i class="fa fa-reply fa-fw animation-fadeInRight"></i> 返回
</a>
</li>
 
</ul>
 
 
<ul class="nav navbar-nav-custom pull-right">
<li>
<a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt');this.blur();">
<i class="fa fa-wrench sidebar-nav-icon"></i>
</a>
</li>
<li class="dropdown">
<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
<img src="http://q4.qlogo.cn/headimg_dl?dst_uin=<?=$conf['qq']?>&spec=100" alt="avatar">
</a>
</li>
</ul>
</header>
<div id="page-content">
		<div id="myDiv"></div>
			<div class="main pjaxmain">
				<div class="content-header">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="header-section">
                                    <h1><?php echo $title ?></h1>
                                </div>
                            </div>
                        </div>
				</div>
<div class="row">
<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
<div class="block">
<div class="block-title"><h3 class="panel-title">源码下载</h3></div>
<div class="tab-content">
<div class="tab-pane active">
<form action="./index.php" method="GET" class="form-horizontal" role="form">
	
<div class="form-group">
<label for="web_site_title">授权域名</label>
<input type="text" name="url" value="<?=@$_GET['url']?>" class="form-control" placeholder="授权的域名" autocomplete="off" autofocus="autofocus" required/>
</div>
<div class="form-group">
<label for="web_site_title">授权 Q Q</label>
<input type="text" name="qq" value="<?=@$_GET['qq']?>" class="form-control" placeholder="输入的QQ" autocomplete="off" autofocus="autofocus" required/>
</div>
<div class="form-group">
<label for="web_site_title">授权代码</label>
<input type="text" name="authcode" value="<?=@$_GET['authcode']?>" class="form-control" placeholder="输入授权码" autocomplete="off" autofocus="autofocus" required/>
</div>
<div class="form-group">
<button type="submit" id="check" class="btn btn-effect-ripple btn-primary">获取</button>
</div>
</div>
</form>
</div>
</div>

<div class="block">
<div class="block-title"><h3 class="panel-title">使用教程</h3></div>
<div class="card-body">
</p>
1、如果需要全新搭建或之前未搭建过，请下载完整安装包；如果之前搭建过，请下载更新包直接覆盖，数据不会丢失。</p>
2、输入您的购买授权的QQ来获取下载即可，通过验证后即可下载更新包&安装包，或者你也可以联系客服获取源码。</p>
</div>
</div>
</div>
<?php }?>
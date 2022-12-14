<?php
@header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title><?php echo $conf['title']?> -  <?=$title?></title>
  <link rel="icon" href="../assets/imgs/favicon.ico" type="image/ico">
  <meta name="keywords" content="<?php echo $conf['keywords']; ?>"/>
  <meta name="description" content="<?php echo $conf['description']; ?>"/>
  <link href="//cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="//cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="../assets/appui/css/main.css">
  <link rel="stylesheet" href="../assets/appui/css/themes.css">
  <link id="theme-link" rel="stylesheet" href="<?php echo $_COOKIE['optionThemeColor']?$_COOKIE['optionThemeColor']:'../assets/appui/css/themes/amethyst-2.4.css';?>">
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
<!-- Start: Header -->
    <div id="page-wrapper">
        <div id="page-container" class="header-fixed-top sidebar-visible-lg-full enable-cookies">
<div id="sidebar-alt" tabindex="-1" aria-hidden="true">
<a href="javascript:void(0)" id="sidebar-alt-close" onclick="App.sidebar('toggle-sidebar-alt');"><i class="fa fa-times"></i></a>
<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 888px;"><div id="sidebar-scroll-alt" style="overflow: hidden; width: auto; height: 888px;">
<div class="sidebar-content">
<div class="sidebar-section">
<style>
h4{font-family:"????????????",Georgia,Serif;}
</style>
<h4 class="text-light">????????????(New)</h4>
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
                    <i class="fa fa-cube"></i> <span class="sidebar-nav-mini-hide">????????????</span>
                </a>
				</div>
                <div id="sidebar-scroll">
                    <div class="sidebar-content">
                        <ul class="sidebar-nav">
<li>
	<a class="<?php echo checkIfActive('index,')?>" href="./">
		<i class="fa fa-home sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">????????????</span>
	</a>
</li>

<li class="<?php echo checkIfActive('ulist,user,password,info')?>">
	<a href="javascript:void(0)" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-calendar sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">????????????</span></a>
	<ul>
<li>
	<a class="<?php echo checkIfActive("ulist") ?>" href="./ulist.php">
		????????????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("user") ?>" href="./user.php">
		????????????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("password") ?>" href="./password.php">
		????????????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("info") ?>" href="./info.php">
		????????????
	</a>
</li>
	</ul>
</li>

<li class="<?php echo checkIfActive('urllist,paylist,add,addpay,payedit,edit,addsite,search,km,api')?>">
	<a href="javascript:void(0)" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-cloud sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">????????????</span></a>
	<ul>
<li>
	<a class="<?php echo checkIfActive("urllist") ?>" href="./urllist.php">
		????????????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("paylist") ?>" href="./paylist.php">
		????????????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("addpay") ?>" href="./addpay.php">
		????????????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("add") ?>" href="./add.php">
		????????????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("addsite") ?>" href="./addsite.php">
		????????????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("search") ?>" href="./search.php">
		????????????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("km") ?>" href="./km.php">
		????????????
	</a>
</li>
	</ul>
</li>
<li class="<?php echo checkIfActive('log,downlog,set,site,apiset,check,module,muban,mail,gg,logo,clean,update')?>">
	<a href="javascript:void(0)" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-cog sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">????????????</span></a>
	<ul>
<li>
	<a class="<?php echo checkIfActive("log") ?>" href="./log.php">
		??????????????????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("downlog") ?>" href="./downlog.php">
		??????????????????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("site") ?>" href="./set.php?mod=site">
		??????????????????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("apiset") ?>" href="./set.php?mod=apiset">
		?????? API??????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("check") ?>" href="./set.php?mod=check">
		??????????????????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("module") ?>" href="./set.php?mod=module">
		??????????????????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("muban") ?>" href="./set.php?mod=muban">
		??????????????????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("mail") ?>" href="./set.php?mod=mail">
		??????????????????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("gg") ?>" href="./set.php?mod=gg">
		??????????????????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("logo") ?>" href="./set.php?mod=upimg">
		??????????????????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("clean") ?>" href="./clean.php">
		??????????????????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("update") ?>" href="./update.php">
		??????????????????
	</a>
</li>
	</ul>
</li>

<li class="<?php echo checkIfActive('downfile,base64,base64jq,md5')?>">
	<a href="javascript:void(0)" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-download sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">????????????</span></a>
	<ul>
<li>
	<a class="<?php echo checkIfActive("downfile") ?>" href="./downfile.php">
		????????????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("base64") ?>" href="./base64.php">
		base??????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("basejq") ?>" href="./base64jq.php">
		 BASE 64
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("md5") ?>" href="./md5.php">
		 MD5??????
	</a>
</li>
	</ul>
</li>

<li class="<?php echo checkIfActive('pirate,getpwd')?>">
	<a href="javascript:void(0)" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-thumbs-o-up sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">????????????</span></a>
	<ul>
<li>
	<a class="<?php echo checkIfActive("pirate") ?>" href="./pirate.php">
		????????????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("getpwd") ?>" href="./getpwd.php">
		????????????
	</a>
</li>
	</ul>
</li>

<?php if($udata['uid']=='1'){?>
<li class="<?php echo checkIfActive('ukyun')?>">
	<a href="javascript:void(0)" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-cubes sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">????????????</span></a>
	<ul>
<li>
	<a class="<?php echo checkIfActive("ukyun") ?>" href="https://bbs.ukyun.cn/page/3.html">
		????????????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("ukyun") ?>" href="http://kefu.ukyun.cn">
		????????????
	</a>
</li>
<li>
	<a class="<?php echo checkIfActive("ukyun") ?>" href="https://jq.qq.com/?_wv=1027&k=5yIrmNH">
		??????Q???
	</a>
</li>
	</ul>
</li>
<?php }?>
<li>
	<a class="<?php echo checkIfActive('daima')?>" href="./daima.php">
		<i class="fa fa-book sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">????????????</span>
	</a>
</li>

<li>
	<a class="<?php echo checkIfActive('login')?>" href="./login.php?logout">
		<i class="fa fa-sign-out sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">????????????</span>
	</a>
</li>

</ul>
</div>
</div>
<div id="sidebar-extra-info" class="sidebar-content sidebar-nav-mini-hide">
<div class="progress progress-mini push-bit">
<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
</div><div class="text-center">
<small><span id="year-copy"></span>?? <?php echo $conf["title"]?><a href="/"></a></small>
</div>
</div>
            </div>
            <div id="main-container">
                <header class="navbar navbar-inverse navbar-fixed-top">
 
<ul class="nav navbar-nav-custom">
 
<li>
<a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
<i class="fa fa-ellipsis-v fa-fw animation-fadeInRight" id="sidebar-toggle-mini"></i>
<i class="fa fa-bars fa-fw animation-fadeInRight" id="sidebar-toggle-full"></i>??????
</a>
</li>
<li>
<a href="javascript:void(0)" onclick="javascript:history.go(-1);">
<i class="fa fa-reply fa-fw animation-fadeInRight"></i> ??????
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
<img src="http://q4.qlogo.cn/headimg_dl?dst_uin=<?=$udata['qq']?>&spec=100" alt="avatar">
</a>
<ul class="dropdown-menu dropdown-menu-right">
<li class="dropdown-header text-center">
<strong>???????????????</strong>
</li>
<li>
<a href="password.php">
<i class="fa fa-pencil-square fa-fw pull-right"></i>
????????????
</a>
</li>
<li>
<a href="../">
<i class="fa fa-home fa-fw pull-right"></i>
????????????
</a>
</li>
<li class="divider">
</li>
<li>
<li>
<a href="login.php?logout">
<i class="fa fa-power-off fa-fw pull-right"></i>
????????????
</a>
</li>
</ul>
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

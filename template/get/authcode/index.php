<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title><?php echo $conf['title']?> -  源码下载</title>
<link rel="icon" href="../assets/imgs/favicon.ico" type="image/ico">
<meta name="keywords" content="<?php echo $conf['keywords']; ?>"/>
<meta name="description" content="<?php echo $conf['description']?>">
  <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../assets/appui/css/main.css">
  <!--[if lt IE 9]>
    <script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://libs.useso.com/js/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
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
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
<?php
if(isset($_GET['authcode'])) {
$authcode=daddslashes($_GET['authcode']);
$row=$DB->get_row("SELECT * FROM auth_site WHERE authcode='{$authcode}' order by id desc limit 1");
if($row=='')exit("<script language='javascript'>alert('授权平台不存在该授权码！');history.go(-1);</script>");
if($row['active']==0)exit("<script language='javascript'>alert('此授权码已被封禁！');history.go(-1);</script>");
$url=$row['url'];
$sign=$row['sign'];
?>
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">下载管理</h3></div>
          <ul class="list-group">
            <li class="list-group-item"><span class="glyphicon glyphicon-stats"></span> <b>授权URL：</b> <?=$url?>&nbsp;<a href="../api/jump.php?url=http://<?=$url?>" class="btn btn-xs btn-primary">进入站点</a></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-time"></span> <b>授权代码：</b> <?=$authcode?></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-tint"></span> <b>特征代码：</b> <?=$sign?></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-list"></span> <b>下载类型：</b> 
              <a href="../includes/downfile.php?my=installer&authcode=<?=$authcode?>&sign=<?=$sign?>&r=<?=time()?>" class="btn btn-xs btn-success">完整安装包</a>&nbsp;
              <a href="../includes/downfile.php?my=updater&authcode=<?=$authcode?>&sign=<?=$sign?>&r=<?=time()?>" class="btn btn-xs btn-primary">更新包</a>
            </li>
          </ul>
		  <div class="panel-footer">
          <span class="glyphicon glyphicon-info-sign"></span> 新购用户请下载完整安装包！
        </div>
      </div>
<?php }else{?>
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">下载管理</h3></div>
        <div class="panel-body">
          <form action="./index.php" method="GET" class="form-horizontal" role="form">
            <div class="input-group">
              <span class="input-group-addon">授权码</span>
              <input type="text" name="authcode" value="<?=@$_GET['url']?>" class="form-control" placeholder="输入授权码下载源码" autocomplete="off" autofocus="autofocus" required/>
            </div><br/>
            <div class="form-group">
              <div class="col-sm-12"><input type="submit" value="获取下载地址" class="btn btn-primary form-control"/></div>
            </div>
          </form>
        </div>
      </div>
<?php }?>

    </div>
  </div>
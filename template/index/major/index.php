<?php
$dailis=$DB->count("SELECT count(*) from auth_daili WHERE 1");
$users=$DB->count("SELECT count(*) from auth_user WHERE 1");
$sites=$DB->count("SELECT count(*) from auth_site WHERE 1");
$blocks=$DB->count("SELECT count(*) from auth_block WHERE 1");
?>
<!DOCTYPE html>
<html lang="zh">
  <head>       
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0" />  
    <title><?php echo $conf['title']?></title>
    <meta name="keywords" content="<?php echo $conf['keywords']?>"/>
    <meta name="description" content="<?php echo $conf['description']?>"/>
    <meta name="author" content="UK云工作室" />
    <link rel="icon" href="assets/imgs/favicon.ico" type="image/ico">
    <link href="../assets/index/major/static/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/index/major/cleanex/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/index/major/static/css/components.min.css">
    <script type="text/javascript" src="//cdn.bootcss.com/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/index/major/static/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/index/major/static/application.fn.js"></script>
    <script type="text/javascript" src="../assets/index/major/static/application.js"></script>  
    <script type="text/javascript" src="../assets/index/major/static/server.js"></script> 
  </head>
  <body class='light home' id="body">
    <a href="#body" id="back-to-top"><i class="glyphicon glyphicon-chevron-up"></i></a>
        <header>
          <div class="navbar" role="navigation">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="glyphicon glyphicon-align-justify"></span>
                </button>
<a class="navbar-brand" href="/"><?php echo $conf['title']?></a>
              </div>
              <div class="navbar-collapse collapse">
                <div class="navbar-collapse collapse">
               <ul class="nav navbar-nav navbar-right">
               <li><a href="get" class="active">源码下载</a></li>
               <li><a href="user/dlcx.php" class="active">代理查询</a></li>
               <li><a href="user/login.php" class="active">用户登录</a></li>
               <li><a href="user/reg.php" class="active">免费注册</a></li>
               </ul>
               </div> 
               </div>
            </div>
          </div>    
        </header> 
<section class="hero">
<div class="container">   
<div class="row">
<div class="col-md-15">
<div class="panelette">
<form action="?" method="get" name="auth">
<div class="main-form">
<div class="row" id="single">
<div class="col-sm-10">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-link"></i></span>
<input type="text" class="form-control" name="url" onkeyup="checkURL();" placeholder="请输入需要查询的域名" required>
      </div>
        </div>
      <div class="col-sm-2">
      	<button type="submit" class="btn btn-default btn-block main-button">点击查询</button>
      </div>
        </div>
<?php
if($url=addslashes($_GET['url'])) {
	if(checkauthurl($url)) {
		echo '<br><center><div class="alert alert-success"><h4>查询结果：正版授权！</h></div></center>';
	}else{
		echo '<br><center><div class="alert alert-danger"><h4>查询结果：该网站未授权！</h4></div></center>';
	}
}
$DB->close();
?>
</div>
  </div>
    </div>
      </div>
</section>
<section id="mainto">
    <div class="container">
      <h3 class="text-center featureH">一种授权，无限可能</h3>
      <div class="row feature">
        <div class="col-sm-12 image">
          <div class="row">
            <div class="col-md-4">
              <div class="panelette">
                <h3><i class="glyphicon glyphicon-screenshot"></i>专业强大的功能</h3>
                <p>检测使用者是否授权，未授权不可使用</p>
              </div>
            </div>
            <br>
            <div class="col-md-4">
              <div class="panelette panelette-grad">
                <h3><i class="glyphicon glyphicon-send"></i>专业分销</h3>
                <p>添加下级，下级再添加下级进行销售</p>                
              </div>
            </div>
            <br>
			<div class="col-md-4">
              <div class="panelette">
                <h3><i class="glyphicon glyphicon-fire"></i>扩展功能</h3>
                <p>统计盗版用户信息，一键黑站等等</p>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>    
  </section>
  <section class="red">
    <div class="container">
      <div class="row feature">
        <div class="col-sm-5 info">
          <h2><i class="glyphicon glyphicon-filter"></i> 多种功能</h2>
          <p>系统通过一种智能的方式判断使用者是否为授权用户，未授权的统计信息，方便简洁。
          在线更新功能为用户提供了程序的一键更新，减少手动更新的辛劳。
          一键黑站功能方便了盗版用户的管理，无需浪费时间进行黑站。</p>
          <br>         
        </div>
        <div class="col-sm-7 image">
          <img src="../assets/index/major/cleanex/assets/images/landing.png" alt="多种功能等你发现">
        </div>
      </div>         
    </div>    
  </section>
<section class="calltoaction">
  <div class="container">
    <div class="actionbar">
      <h2>准备好发布您的程序了吗，快来使用？</h2>
      <a href="user/reg.php" class="btn btn-secondary btn-round">免费注册</a>
    </div>
<div class="stats">
        <div class="row">
          <div class="col-xs-3">
            <strong>系统代理</strong>      
            <h3><?php echo $dailis ?><span>个</span></h3>
          </div>
          <div class="col-xs-3">
            <strong>系统站长</strong>      
            <h3><?php echo $users ?><span>个</span></h3>
          </div>
          <div class="col-xs-3">
            <strong>正版用户</strong>
            <h3><?php echo $sites ?><span>个</span></h3>
          </div>
           <div class="col-xs-3">
            <strong>盗版用户</strong>      
            <h3><?php echo $blocks ?><span>个</span></h3>
          </div>
        </div>           
      </div>
  </div>
</section> 
<script type="text/javascript" src="../assets/index/major/cleanex/assets/js/main.js"></script>
</body>
</html>
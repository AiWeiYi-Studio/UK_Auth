<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $conf['title']?></title>
<link rel="icon" href="../assets/imgs/favicon.ico" type="image/ico">
<meta name="keywords" content="<?php echo $conf['keywords']; ?>"/>
<meta name="description" content="<?php echo $conf['description']; ?>"/>
<link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!--[if lt IE 9]>
    <script src="//lib.baomitu.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//lib.baomitu.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
	<style>
	body{
		margin: 0 auto;
		text-align: center;
	}
	.container {
	  max-width: 580px;
	  padding: 15px;
	  margin: 0 auto;
	}
	</style>
<script type="text/javascript">
	  function getValue(obj,str){
	  var input=window.document.getElementById(obj);
	  input.value=str;
	  }
</script>
</head>
<body>
<script>
function checkURL()
{
	var url;
	url = document.auth.url.value;

	if (url.indexOf(" ")>=0){
		url = url.replace(/ /g,"");
		document.auth.url.value = url;
	}
	if (url.toLowerCase().indexOf("http://")==0){
		url = url.slice(7);
		document.auth.url.value = url;
	}
	if (url.toLowerCase().indexOf("https://")==0){
		url = url.slice(8);
		document.auth.url.value = url;
	}
	if (url.slice(url.length-1)=="/"){
		url = url.slice(0,url.length-1);
		document.auth.url.value = url;
	}
}
</script>
<div class="container">   
<div class="header">
        <ul class="nav nav-pills pull-right" role="tablist">
          <li role="presentation" class="active"><a href="index.php">正版查询</a></li>
          <li role="presentation"><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['qq']?>&site=qq&menu=yes">购买程序</a></li>
           <li role="presentation"><a href="./user/login.php">用户登录</a></li>
        </ul>
        <h3 class="text-muted" align="left">正版查询</h3>
     </div><hr>
     	 <h3 class="form-signin-heading">输入域名查询</h3>
     	  (不要带http://)
<form action="?" method="get" name="auth">
<input type="text" class="form-control" name="url" onkeyup="checkURL();" placeholder="请输入需要查询的域名" required><br>
<button type="submit" class="btn btn-primary btn-block">点击查询</button><br>
<?php
if($url=addslashes($_GET['url'])) {
	if(checkauthurl($url)) {
		echo '<center><label>查询域名：</label>'.$url.'<br><div class="alert alert-success"><img src="http://daishua.cccyun.cc/static/ico_success.png">查询结果：正版授权！</div></center>';
	}else{
		echo '<label>查询域名：</label>'.$url.'<br><div class="alert alert-danger"><img src="http://daishua.cccyun.cc/static/ico_tip.png">查询结果：该网站未授权！</div>';
	}
}
$DB->close();
?>
<hr>
<div class="container-fluid">
	<p style="text-align:center">
  <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['qq']?>&site=qq&menu=yes" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-credit-card"></span>购买</a>
  <a href="get" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-exclamation-sign"></span> 下载</a> 
  <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['qq']?>&site=qq&menu=yes" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-user"></span> 客服</a>
  <a href="user/reg.php" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span>注册</a>
<br><br><br>&copy; Powered by <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['qq']?>&site=qq&menu=yes"><?php echo $conf['title']?></a></p></div>
</div>
</div>
</body>
</html>
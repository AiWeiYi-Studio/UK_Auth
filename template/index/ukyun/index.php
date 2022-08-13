<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <title><?php echo $conf['title']?></title>
  <link rel="icon" href="../assets/imgs/favicon.ico" type="image/ico">
  <meta name="keywords" content="<?php echo $conf['keywords']; ?>"/>
  <meta name="description" content="<?php echo $conf['description']; ?>"/>
  <link rel="stylesheet" href="http://auth.6zds.cn/other/assets/layui/css/layui.css">
  <script src="http://auth.6zds.cn/other/assets/layui/layui.all.js"></script>
  <script src="https://cdn.bootcss.com/sweetalert/2.1.0/sweetalert.min.js"></script>
</head>
<style>body{background:linear-gradient(to right,#FFCCCC,#CCCCFF);font-family:"微软雅黑";
}
@media only screen and (min-width:700px ) {
	.content{
		left: 50%;
		margin-left: -25%;
	}
}.img{
	width: 7em;
	height: 7em;
	margin:auto;
	display: block;
	border-radius: 10em;
	box-shadow: 3px 3px 8px 1px silver;
	margin-bottom: 1em;
}
</style>
<div class="imgc"></div>
<body layadmin-themealias="dark-blue" style="margin-top: 1em;">	
<div class="layui-fluid">
	<div class="a layui-anim layui-anim-fadein">
    	<div class="layui-row layui-col-space15">
<div class="layui-col-sm6 content">
            <div class="layui-card">
            	<div class="layui-card-header" style="height: 3em; line-height: 3em;">
            		<h3>
            		<?php echo $conf['title']?>
            		</h3>
            	</div>
<div class="layui-card-body">
<img class="img" src="http://q4.qlogo.cn/headimg_dl?dst_uin=<?php echo $conf['qq']?>&spec=100">
<div class="layui-form" action="?mod=reg" method="post">
<div class="layui-form-item">
    <div class="layui-input-company">
<form action="?" method="get" name="auth">
<input type="text" id="url" style="text-align: center;" name="url" onkeyup="checkURL();" placeholder="请输入需要查询的域名" class="layui-input">
    </div>
</div>
<div class="layui-form-item">
    <div class="layui-input-company">
<s><button onclick="check()" class="layui-btn layui-btn layui-btn-lg layui-btn-normal layui-btn-fluid" type="submit"  lay-filter="formDemo">点我查询</button></s>
<br><br><br><center>
<?php
if($url=addslashes($_GET['url'])) {
	//echo '<label>查询域名:<font color="#FF00FF">'.$url.'</label></font>';
	//echo '<label>base64:<font color="#FF0000">'.base64_encode($url).'</label></font>';
	//echo '<label>MD5:<font color="#0000FF">'.MD5($url).'</label></font>';
	if(checkauthurl($url)) {
		echo '<div class="alert alert-success"><b>您所查询的网址：<font color="#FF00FF">'.$url.'</b></font><br></br><b>查询结果：<font color="#0000FF">正版程序</b></font></div>';
	}else{
		echo '<div class="alert alert-danger"><b>您所查询的网址：<font color="#FF00FF">'.$url.'</b></font><br></br><b>查询结果：<font color="#FF0000">非正版授权</b></font></div>';
	}
}
$DB->close();
?></center>
    </div>
</div>
<div style="width: 100%;margin-top: 0.3rem;text-align: center;color: ;"><a href="user/dlcx.php">代理查询</a> - <a href="user/login.php">用户登录</a> - <a href="user/reg.php">用户注册</a> - <a href="user/kmsq.php">卡密授权</a><br>—— <a href="get">下载源码</a> </script> ——</div>
            	</div>
			  </div>
			</div>
	<div class="layui-card" id="dowe">
		<div class="layui-card-header" style="font-size: 1.5em;text-align: center;">更新日志 </div>
<?php echo $conf['uplog']?>
	</div>
		</div>
	</div>
 </div>
</div>
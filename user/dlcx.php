<?php
/**
 * 代理查询
**/
include("../includes/common.php");
$title='代理查询';
if($islogins==1){}else exit("<script language='javascript'>alert('您还未登录,请先登录才能进入！');window.location.href='./login.php';</script>");
include './head.php';
echo '<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">';
?>
<div class="block">
<div class="block-title"><h3 class="panel-title">代理查询</h3></div>
<div class="card-body">
<form action="?" method="get">
<input type="text" class="form-control" name="qq" onkeyup="value=value.replace(/[^1234567890]+/g,'')" placeholder="输入要查询的QQ" required><br>
<button type="submit" class="btn btn-primary btn-block">点击查询</button><br>
<?php
if($qq=addslashes($_GET['qq'])) {
   	$rows=$DB->get_row("SELECT * FROM auth_user WHERE qq='$qq' limit 1");
   	$row=$DB->get_row("SELECT * FROM auth_daili WHERE qq='$qq' limit 1");
	if($row or $rows) {
		echo '<div class="alert alert-success"><b>您所查询的QQ：<font color="#FF00FF">'.$qq.'</b></font><br></br><b>查询结果：<font color="#0000FF">正版官方授权商，大胆放心去交易！</b></font></div>';
	}else{
		echo '<div class="alert alert-danger"><b>您所查询的QQ：<font color="#FF00FF">'.$qq.'</b></font><br></br><b>查询结果：<font color="#FF0000">该QQ不是授权商，交易请谨慎！</b></font></div>';
	}
}
$DB->close();
?>
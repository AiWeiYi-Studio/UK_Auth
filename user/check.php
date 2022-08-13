<?php
/**
 * 正版查询
**/
include("../includes/common.php");
$title='正版查询';
if($islogins==1){}else exit("<script language='javascript'>alert('您还未登录,请先登录才能进入！');window.location.href='./login.php';</script>");
include './head.php';
echo '<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">';
?>
<script type="text/javascript">
	  function getValue(obj,str){
	  var input=window.document.getElementById(obj);
	  input.value=str;
	  }
</script>
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
<div class="block">
<div class="block-title"><h3 class="panel-title">正版查询</h3></div>
<div class="card-body">
<form action="?" method="get" name="auth">
<input type="text" class="form-control" name="url" onkeyup="checkURL();" placeholder="请输入需要查询的域名" required><br>
<button type="submit" class="btn btn-primary btn-block">点击查询</button><br>
<?php
if($url=addslashes($_GET['url'])) {
	//echo '<label>查询域名:<font color="#FF00FF">'.$url.'</label></font>';
	//echo '<label>base64:<font color="#FF0000">'.base64_encode($url).'</label></font>';
	//echo '<label>MD5:<font color="#0000FF">'.MD5($url).'</label></font>';
	if(checkauthurl($url)) {
		echo '<div class="alert alert-success"><b>您所查询的网址：<font color="#FF00FF">'.$url.'</b></font><br></br><b>查询结果：<font color="#0000FF">正版程序</b></font></div>';
	}else{
		echo '<div class="alert alert-danger"><b>您所查询的网址：<font color="#FF00FF">'.$url.'</b></font><br></br><b>查询结果：<font color="#FF0000">非正版授权</b></font><br></br><a href="http://wpa.qq.com/msgrd?v=3&uin='.$conf['qq'].'&site=qq&menu=yes" class="text-ab"><font color="#00BFFF">不是正版？点击购买正版</a></font></div>';
	}
}
$DB->close();
?>
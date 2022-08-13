<?php
/*
 * 本程序由 Xiaojie_evals 解密
 * 官网地址：decode.xiaojieapi.com
 * 官方群号：809513269
 * 当前时间：2022-08-12 06:11:02
*/
?>
<?php
include("../includes/common.php");
$url=daddslashes($_GET['url']);
if($url == "127.0.0.1" || $url == "localhost");
if(pay_api($url)) {
	$result=array('code'=>1);
} else {
	$result=array('code'=>-1);
}
echo json_encode($result);
$DB->close();
?>
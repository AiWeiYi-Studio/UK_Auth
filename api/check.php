<?php
/*
 * 本程序由 Xiaojie_evals 解密
 * 官网地址：decode.xiaojieapi.com
 * 官方群号：809513269
 * 当前时间：2022-08-12 06:10:00
*/
?>
<?php
include("../includes/common.php");
define("VERSIONS",$conf['version']);//最新版本号
$url=daddslashes($_GET['url']);
$authcode=daddslashes($_GET['authcode']);
if(!$_GET['ver'] && ($url=='localhost' || $url=='127.0.0.1'))exit();


if($_GET['ver']) {

	$param=base64_encode(authcode($_GET['ver']."\t".$url."\t".$authcode."\t".(time()+600),'ENCODE','UKYUN'));
	$download=$siteurl.'download.php?update=true&param='.$param.'&rand='.rand(100000,999999);

	if($conf['update']==1) {
		if($_GET['ver']>=VERSIONS) {
			$code=0;
			$msg='<font color="green">您使用的已是最新版本！</font><br/>当前版本：'.$conf['ver'].' (Build '.VERSIONS.')';
		} else {
			$code=1;
			$msg='<font color="red">发现新版本！</font> 最新版本：'.$conf['ver'].' (Build '.VERSIONS.')';
		}
	} else {
		$code=0;
		$msg='<font color="blue">更新服务器正在维护，请稍后访问！</font>';
	}
}

if($authcode && checkauth($url,$authcode) || $url=='localhost' || $url=='127.0.0.1') {
	if($_GET['ver'])
		$result=array('code'=>$code,'msg'=>$msg,'ver'=>$conf['ver'],'VERSIONS'=>VERSIONS,'uplog'=>$conf['uplog'],'file'=>$download);
	else
		$result=array('code'=>'1','authcode'=>$authcode);
} else {
	$result=array('code'=>'-1','msg'=>$conf['content']);
}
if($conf['switch']==0 && !$_GET['ver'])$result=array('code'=>'1','authcode'=>$authcode);

echo json_encode($result);
$DB->close();
?>
<?php
/*
 * 本程序由 Xiaojie_evals 解密
 * 官网地址：decode.xiaojieapi.com
 * 官方群号：809513269
 * 当前时间：2022-08-12 06:11:18
*/
?>
<?php
$mod='blank';
include("../includes/common.php");
$qq=daddslashes($_GET['qq']);

$row=$DB->get_row("SELECT * FROM auth_site WHERE uid='$qq' and active=1 limit 1");
if($row['url'])
echo '1';
else
echo '0';
$DB->close();
?>
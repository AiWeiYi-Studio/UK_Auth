<?php
include("../includes/common.php");
if(isset($_GET['userinfo'])){
if($_GET['key']!==ukyun){
	exit;
}
$user=intval($_GET['user']);
$row=$DB->get_row("select * from auth_daili where user='$user' limit 1");
if($row['active']==1){
$actives='正常使用';       
}else{
$actives='违规封禁';
}
if($row['power']==1){
$powers='超级授权商';
}elseif($row['power']==2){
$powers='日站协助员';
}elseif($row['power']==3){
$powers='易支付认证商';
}elseif($row['power']==4){
$powers='域名授权商';
}elseif($row['power']==5){
$powers='普通用户(部分功能不显示)';
}
echo '
<div class="text-left">
<div style="margin-top:10px;">
<label>用户UID：</label>
<input class="form-control" readonly value="'.$row['uid'].'">
</div>
<div style="margin-top:10px;">
<label>用户名：</label>
<input class="form-control" readonly value="'.$row['user'].'">
</div>
<div style="margin-top:10px;">
<label>用户QQ：</label>
<input class="form-control" readonly value="'.$row['qq'].'">
</div>
<div style="margin-top:10px;">
<label>用户昵称：</label>
<input class="form-control" readonly value="'.$row['name'].'">
</div>
<div style="margin-top:10px;">
<label>用户IP：</label>
<input class="form-control" readonly value="'.$row['ip'].'">
</div>
<div style="margin-top:10px;">
<label>上次登陆IP：</label>
<input class="form-control" readonly value="'.$row['lastip'].'">
</div>
<div style="margin-top:10px;">
<label>上次登陆时间：</label>
<input class="form-control" readonly value="'.$row['lasttime'].'">
</div>
<div style="margin-top:10px;">
<label>账号状态：</label>
<input class="form-control" readonly value="'.$actives.'">
</div>
<div style="margin-top:10px;">
<label>账号权限：</label>
<input class="form-control" readonly value="'.$powers.'">
</div>
<div style="margin-top:10px;">
<label>快捷登录：</label>
<input class="form-control" readonly value="'.$row['access_token'].'">
</div>
</div>';
}elseif(isset($_GET['checklogin'])){
if($_GET['key']!==ukyun){
	exit;
}
$user = intval($_GET['user']);
$pass = $_GET['pass'];
$row=$DB->get_row("select * from auth_daili where user='$user' limit 1");
if($user=='' and $pass==''){
echo '1';
}
if($row['user']==$user and $row['pass']==$pass){
echo '1';
}else{
echo '0';
}
}
?>
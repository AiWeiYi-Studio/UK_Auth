<?php
/**
 * 编辑授权
**/
include("../includes/common.php");
$title='编辑授权';
include './head.php';
if($islogins==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
echo '<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">';
if($udata['power'] =='5'){
	showmsg('您的账号没有权限使用此功能',3);
	exit;
}elseif($udata['power'] =='2'){
	showmsg('您的账号没有权限使用此功能',3);
	exit;
}elseif($udata['power'] =='3'){
	showmsg('您的账号没有权限使用此功能',3);
	exit;
}
?>
<?php
if($_GET['my']=='edit') {
$id=intval($_GET['id']);
$row=$DB->get_row("SELECT * FROM auth_site WHERE id='{$id}' and daili='{$daili_id}' limit 1");
if($row=='')exit("<script language='javascript'>alert('授权平台不存在该记录！');history.go(-1);</script>");
if(isset($_POST['submit'])) {
	$uid=daddslashes($_POST['uid']);
	$url=daddslashes($_POST['url']);
	$authcode=daddslashes($_POST['authcode']);
	$sign=daddslashes($_POST['sign']);
	$active=intval($_POST['active']);
	$ip=daddslashes($_POST['ip']);
	$key=daddslashes($_POST['key']);
	if(strlen($authcode)!=32)showmsg('授权码格式错误！');
	else{
		$sql="update `auth_site` set `uid` ='{$uid}',`url` ='{$url}',`authcode` ='{$authcode}',`sign` ='{$sign}',`active` ='{$active}',`ip` ='{$ip}',`key` ='{$key}' where `id`='{$id}' and daili='{$daili_id}'";
		if($DB->query($sql)){
		        $city=get_ip_city($clientip);
$DB->query("insert into `auth_log` (`uid`,`type`,`date`,`city`,`data`) values ('".代理.$user."','修改授权','".$date."','".$city."','IP：".$clientip."|QQ：".$qq."|域名：".$url."|授权码：".$authcode."')");
        exit("<script language='javascript'>alert('修改成功！');window.location.href='./urllist.php';</script>");
}else showmsg('修改失败！<br/>'.$DB->error(),4,$_POST['backurl']);
	}
}else{
?>
<div class="block">
<div class="block-title"><h3 class="panel-title">编辑授权</h3></div>
<div class="card-body">
<form action="./edit.php?my=edit&id=<?php echo $id; ?>" method="post" class="form-horizontal" role="form">
<div class="form-group">
<label for="exampleInputName1">授权QQ</label>
<input type="text" name="uid" value="<?php echo $row['uid']; ?>" class="form-control" placeholder="购买授权的QQ">
</div>
<div class="form-group">
<label for="exampleInputEmail3">授权域名</label>
<input type="text"  name="url" value="<?php echo $row['url']; ?>" class="form-control" placeholder="域名不带http://">
</div>
<div class="form-group">
<label for="exampleInputEmail3">授权I P</label>
<input type="text"  name="ip" value="<?php echo $row['ip']; ?>" class="form-control" placeholder="留空自动获取">
</div>
<div class="form-group">
<label for="exampleInputEmail3">授权码</label>
<input type="text"  name="authcode" value="<?php echo $row['authcode']; ?>" class="form-control" placeholder="由字母和数字组成的32位秘钥">
</div>
<div class="form-group">
<label for="exampleInputEmail3">特征码</label>
<input type="text"  name="sign" value="<?php echo $row['sign']; ?>" class="form-control" placeholder="只能填数字">
</div>
<div class="form-group">
<label for="exampleInputEmail3">秘钥</label>
<input type="text"  name="key" value="<?php echo $row['key']; ?>" class="form-control" placeholder="由字母和数字组成的32位秘钥">
</div>
<div class="form-group">
<label for="exampleSelectGender">授权状态</label>
<select class="form-control" name="active">
<?php if($row['active']==1){?>
<option value="1">1_激活</option>
<option value="0">0_封禁</option>
<?php }else{?>
<option value="0">0_封禁</option>
<option value="1">1_激活</option>
<?php }?>
</select>
</div>
<div class="form-group">
<button type="submit" name="submit" class="btn btn-primary btn-block">确定修改</button>
</div>
</form>
</div>
</div>
</div>
<?php
}
}?>
</div>
</div>
<?php
/**
 * 添加站点
**/
include("../includes/common.php");
$title='添加站点';
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
if(isset($_POST['qq']) && isset($_POST['url'])){
$qq=daddslashes($_POST['qq']);
$url=daddslashes($_POST['url']);
$daili=daddslashes($_POST['daili']);
$key=daddslashes($_POST['key']);
$row=$DB->get_row("SELECT * FROM auth_site WHERE uid='{$qq}' limit 1");
if($row=='')exit("<script language='javascript'>alert('授权平台不存在该QQ！');history.go(-1);</script>");
if($row['active']==0)exit("<script language='javascript'>alert('此QQ的授权已被封禁！');history.go(-1);</script>");
$url_arr=explode(',',$url);
$re='';
foreach($url_arr as $val) {
	$row1=$DB->get_row("SELECT * FROM auth_site WHERE url='{$val}' limit 1");
	if($row1!='')continue;
	$sql="insert into `auth_site` (`uid`,`url`,`date`,`authcode`,`active`,`sign`,`daili`) values ('".$qq."','".trim($val)."','".$date."','".$row['authcode']."','1','".$row['sign']."','".$daili."','".$key."')";
	$DB->query($sql);
	$re.=$val.',';
}
if($re){
$city=get_ip_city($clientip);
$DB->query("insert into `auth_log` (`uid`,`type`,`date`,`city`,`data`) values ('".代理.$user."','添加站点','".$date."','".$city."','QQ：".$qq."|域名：".$re."')");
exit("<script language='javascript'>alert('{$re}添加成功！');history.go(-1);</script>");
}else
exit("<script language='javascript'>alert('添加失败，可能域名已存在！');history.go(-1);</script>");
} ?>
<div class="block">
<div class="block-title"><h3 class="panel-title">老加授权</h3></div>
<div class="card-body">
<form action="./addsite.php" method="post" class="form-horizontal" role="form">
<div class="input-group">
<span class="input-group-addon">授权ＱＱ</span>
<input type="text" name="qq" value="<?=@$_POST['qq']?>" class="form-control" onkeyup="value=value.replace(/[^1234567890]+/g,'')" maxlength="10" placeholder="已经授权过的QQ" autocomplete="off" required/>
</div><br/>
<div class="input-group">
<span class="input-group-addon">授权域名</span>
<input type="text" name="url" value="<?=@$_POST['url']?>" class="form-control" onkeyup="checkURL();" placeholder="比如：www.baidu.com" autocomplete="off" required/>
</div><br/>
<div class="input-group">
<span class="input-group-addon">秘钥</span>
<input type="text" name="key" value="<?=strtoupper(md5(time()."^%$#"))?>" class="form-control" placeholder="32位秘钥" autocomplete="off" required/>
</div><br/>
<div class="input-group">
<span class="input-group-addon">隶属用户</span>
<input type="text" name="daili" value="<?php echo $udata['uid']; ?>" class="form-control" placeholder="填用户uid可以转到用户账下" autocomplete="off" required/>
</div><br/>
<div class="form-group"></div>
<button type="submit" class="btn btn-primary btn-block">添加授权</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
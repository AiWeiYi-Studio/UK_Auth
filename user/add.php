<?php
/**
 * 添加授权
**/
include("../includes/common.php");
$title='添加授权';
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
if($row!='' && $conf['ipauth']==0)exit("<script language='javascript'>alert('授权平台已存在该QQ，请使用“添加站点”！');history.go(-1);</script>");
$row1=$DB->get_row("SELECT * FROM auth_site WHERE 1 order by sign desc limit 1");
$sign=$row1['sign']+1;
$authcode=md5(random(32).$qq);
$row2=$DB->get_row("SELECT * FROM auth_site WHERE authcode2='{$authcode}' limit 1");
if($row!='')exit("<script language='javascript'>alert('可能已经存在QQ或者其他情况，返回使用添加站点试试！');history.go(-1);</script>");
$url_arr=explode(',',$url);
foreach($url_arr as $val) {
	$sql="insert into `auth_site` (`uid`,`url`,`date`,`authcode`,`active`,`sign`,`daili`,`key`) values ('".$qq."','".trim($val)."','".$date."','".$authcode."','1','".$sign."','".$daili."','".$key."')";
	$DB->query($sql);
}
$city=get_ip_city($clientip);
$DB->query("insert into `auth_log` (`uid`,`type`,`date`,`city`,`data`) values ('".代理.$user."','新增授权','".$date."','".$city."','QQ:".$qq."|域名:".$url."')");
exit("<script language='javascript'>alert('添加授权成功！');window.location.href='downfile.php?url={$url}';</script>");
}
?>
<div class="block">
<div class="block-title"><h3 class="panel-title">新加授权</h3></div>
<div class="card-body">
<form action="./add.php" method="post" class="form-horizontal" role="form" name="auth">
<div class="input-group">
<span class="input-group-addon">授权ＱＱ</span>
<input type="text" name="qq" value="<?=@$_POST['qq']?>" class="form-control" onkeyup="value=value.replace(/[^1234567890]+/g,'')" maxlength="10" placeholder="购买授权的QQ" autocomplete="off" required/>
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
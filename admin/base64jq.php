<?php
/**
 * base64加密
**/
include('../includes/common.php');
$title = 'PHP加密';
include './head.php';
if ($islogin!=1) {
    exit('<script language=\'javascript\'>window.location.href=\'./login.php\';</script>');
}
echo '<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">';
if($udata['uid'] !=='1'){
	showmsg('您的账号没有权限使用此功能',3);
	exit;
}
function phpencode($code) {
$code = str_replace(array('<?php','?>','<?PHP'),array('','',''),$code);
$encode = base64_encode(gzdeflate($code));
$encode = '<?php
/*
 本代码已被 UK云工作室 加密
 技术支持：UK云工作室
 开发人员: 辉辉很乖
 QQ：2874992246
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/'."\neval(gzinflate(base64_decode("."'".$encode."'".")));\n?>";
return $encode;
}
?>
<div class="panel panel-primary">
<div class="panel-heading" style="background:linear-gradient(to right,#14b7ff,#b221ff);"><h3 class="panel-title"><h3 class="panel-title">PHP文件在线加密</h3></div>
       <div class="panel-body">
				<form method='post'>
  <div class="form-group">
    <label>输入你要加密的代码</label>
    <textarea class="form-control" rows="5" name="source"></textarea>
  </div>
      <input class="btn btn-primary btn-block" type="submit" value="点击加密"></div></form>
</div>
 <div class="panel panel-primary">
<div class="panel-heading" style="background:linear-gradient(to right,#14b7ff,#b221ff);"><h3 class="panel-title"><h3 class="panel-title">加密后代码</h3></div>
       <div class="panel-body">
    <textarea class="form-control" rows="10">
<?php
if(!empty($_POST['source'])) {
echo  htmlspecialchars(phpencode(stripcslashes($_POST['source'])));
}
?>
</textarea>
  </div>
<?php
if($_POST['source']==NULL){}else{
echo '<div class="alert alert-success alert-custom" role="alert"><span class="glyphicon glyphicon-info-sign"></span> <strong>提示</strong>：加密成功！</div>';
$city=get_ip_city($clientip);
$DB->query("insert into `auth_log` (`uid`,`type`,`date`,`city`,`data`) values ('".站长.$user."','使用base64加密','".$date."','".$city."','".$clientip.加密成功."')");
}
?>
<div class="alert alert-info" role="alert"><span class="glyphicon glyphicon-info-sign"></span> <strong>提示</strong>:输入要加密的PHP代码后点击按钮即可加密。</div>
</div>
</div>
</div>
</div>
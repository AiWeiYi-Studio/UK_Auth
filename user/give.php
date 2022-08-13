<?php
/**
 * 域名转入
**/
include("../includes/common.php");
$title='域名转入';
include './head.php';
if($islogins==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
echo '<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">';
if(isset($_GET['url'])) {
$url=daddslashes($_GET['url']);
$key=daddslashes($_GET['key']);
$userid=$udata['uid'];
$row=$DB->get_row("SELECT * FROM auth_site WHERE url='{$url}' limit 1");
if($row=='')exit("<script language='javascript'>alert('域名不存在');history.go(-1);</script>");
$keys=$row['key'];
if($row['daili']==$udata['uid']){
exit("<script language='javascript'>alert('你脑子是有病吗？自己的域名转给自己？');history.go(-1);</script>");
}
if($keys!==$_GET['key']){
exit("<script language='javascript'>alert('秘钥不正确哦');history.go(-1);</script>");
}elseif($keys==$_GET['key']){
$DB->query("update auth_site set daili='$userid' where url='{$url}'");
exit("<script language='javascript'>alert('域名转入成功！');history.go(-1);</script>");
}
?>
<?php }else{?>
<div class="block">
<div class="block-title"><h3 class="panel-title">域名转入</h3></div>
</ul>
<div class="tab-content">
<div class="tab-pane active">
<form action="./give.php" method="GET" class="form-horizontal" role="form">
	
<div class="form-group">
<label for="web_site_title">需转入的域名</label>
<input type="text" name="url" value="<?=@$_GET['url']?>" class="form-control" placeholder="授权的域名" autocomplete="off" autofocus="autofocus" required/>
</div>
<div class="form-group">
<label for="web_site_title">域名的秘钥</label>
<input type="text" name="key" value="<?=@$_GET['key']?>" class="form-control" placeholder="域名的秘钥" autocomplete="off" autofocus="autofocus" required/>
</div>

<div class="form-group">
<button type="submit" class="btn btn-effect-ripple btn-primary">转入</button>
</div>
</div>
</form>
</div>
</div>
<?php }?>
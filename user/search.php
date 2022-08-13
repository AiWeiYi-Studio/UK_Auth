<?php
/**
 * 搜索授权
**/
include("../includes/common.php");
$title='搜索授权';
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
if(isset($_POST['kw']) && isset($_POST['type'])){
	exit("<script language='javascript'>window.location.href='./urllist.php?type=".$_POST['type']."&kw=".urlencode(base64_encode($_POST['kw']))."&method=".$_POST['method']."';</script>");
}
?>
<div class="block">
<div class="block-title"><h3 class="panel-title">搜索授权</h3></div>
<div class="card-body">
<form action="./search.php" method="post" class="form-horizontal" role="form">
<div class="form-group">
<label>类别</label>
<select name="type" class="form-control">
<option value="0">全部</option>
<option value="1">ＱＱ</option>
<option value="2">域名</option>
<option value="3">授权码</option>
<option value="4">特征码</option>
</select>
</div>
<div class="form-group">
<label>内容</label>
<input type="text" name="kw" value="" class="form-control" autocomplete="off" required/>
</div>
<div class="form-group">
<select name="method" class="form-control">
<option value="0">精确搜索</option>
<option value="1">模糊搜索</option>
</select>
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary btn-block">添加授权</button>
</div>
</form>
</div>
</div>
</div>
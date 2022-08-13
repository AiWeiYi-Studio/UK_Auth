<?php
/**
 * 我的授权
**/
include("../includes/common.php");
$title='我的授权';
include './head.php';
if($islogins==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
echo '<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">';
?>
<?php
	$gls=$DB->count("SELECT count(*) from auth_site WHERE daili='{$daili_id}'");
	$sql=" 1";
	$con='
<div class="block">
<div class="block-title"><h3 class="panel-title">代理用户(UID:'.$daili_id.')您旗下共有 <b>'.$gls.'</b> 个域名</h3></div>
<div class="card-body">';

$pagesize=10;
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
<table class="table table-hover">
<thead>
<tr>
<th>ID</th>
<th>QQ</th>
<th>域名</th>    
<th>时间</th>    
<th>状态</th>    
<th>操作</th>
</tr>
</thead>
<tbody>
<?php
$rs=$DB->query("SELECT * FROM auth_site WHERE{$sql} and daili='{$daili_id}' order by id desc limit $pageu,$pagesize");
while($res = $DB->fetch($rs))
{
echo '
                          <tr>
                          <td>
                            '.$res['id'].'
                          </td>
                          <td>
                           <a href="list.php?qq='.$res['uid'].'">'.$res['uid'].'</a>&nbsp;<a href="tencent://message/?uin='.$res['uid'].'&Site=%E6%8E%88%E6%9D%83%E5%B9%B3%E5%8F%B0&Menu=yes"><img src="http://pub.idqqimg.com/wpa/images/counseling_style_51.png?>:1"
                          </td>
                          <td>
                           <a href="../api/jump.php?url='.urlencode(base64_encode('http://'.$res['url'].'/')).'" target="_blank">'.$res['url'].'
                          </td>
                          <td>
                           '.$res['date'].'</td><td onclick="alert(\'授权码：'.$res['authcode'].'\n\r特征码：'.$res['sign'].'\')">'.$res['active'].'
                          </td>
                          <td>
                           <a href="./editurl.php?my=edit&id='.$res['id'].'" class="btn btn-xs btn-info">编辑</a> 
                          </td>
                          <td>
                           </div>
                          </td>
                        </tr>
												';
}
?>
</tbody>
</table>
</div>
<center>
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
</center>
</div>
</div>
</div>
<?php
/**
 * 代理管理
**/
include("../includes/common.php");
$title='代理管理';
include './head.php';
if($islogins==1){}else exit("<script language='javascript'>alert('您还未登录,请先登录才能进入！');window.location.href='./login.php';</script>");
echo '<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">';
if($udata['power'] =='5'){
	showmsg('您的账号没有权限使用此功能',3);
	exit;
}elseif($udata['power'] =='4'){
	showmsg('您的账号没有权限使用此功能',3);
	exit;
}elseif($udata['power'] =='3'){
	showmsg('您的账号没有权限使用此功能',3);
	exit;
}elseif($udata['power'] =='2'){
	showmsg('您的账号没有权限使用此功能',3);
	exit;
}
?>
<div class="block">
<div class="block-title"><h3 class="panel-title">代理管理</h3></div>
<div class="card-body">
<div class="modal fade" align="left" id="search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">搜索代理</h4>
      </div>
      <div class="modal-body">
      <form action="ulist.php" method="GET">
<input type="text" class="form-control" name="kw" placeholder="请输入用户QQ"><br/>
<input type="submit" class="btn btn-primary btn-block" value="搜索"></form>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" align="left" id="jieshao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
    <div class="modal-content">
		         <div class="list-group-item reed" style="background:linear-gradient(120deg, #FE2EF7 10%, #71D7A2 90%);">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
    <center><h4 class="modal-title" id="myModalLabel"><b><font color="#fff">版本介绍</font></b></h4></center>
		</div>

<div class="modal-body">
            <div class="table-responsive">
                <table class="table table-borderless table-vcenter">
                    <thead>
                        <tr>
                            <th style="width: 100px;">功能</th>
                         <font color="#0000FF">超：超级授权商<br>日：日站协助员<br>易：易支付认证商<br>域：域名授权商<br>普：普通用户</b></font>
                            <th class="text-center" style="width: 20px;">超/日/易/域/普</th>
                        </tr>
                    </thead>
					<tbody>
						<tr class="active">
                            <td>添加代理</td>
                            <td class="text-center">
                            	<span class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-check"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;"><i class="fa fa-close"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;"><i class="fa fa-close"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;"><i class="fa fa-close"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;"><i class="fa fa-close"></i></span>
							</td>
                        </tr>
						<tr class="">
                            <td>添加卡密</td>
                            <td class="text-center">
                            	<span class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-check"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;"><i class="fa fa-close"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;"><i class="fa fa-close"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;"><i class="fa fa-close"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;"><i class="fa fa-close"></i></span>
							</td>
                        </tr>
						<tr class="info">
                            <td>易支付认证</td>
                            <td class="text-center">
                            	<span class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-check"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;"><i class="fa fa-close"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-check"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;"><i class="fa fa-close"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;"><i class="fa fa-close"></i></span>
							</td>
                        </tr>
						<tr class="">
                            <td>域名授权</td>
                            <td class="text-center">
                            	<span class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-check"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;"><i class="fa fa-close"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;"><i class="fa fa-close"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-check"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;"><i class="fa fa-close"></i></span>
							</td>
                        </tr>
						<tr class="danger">
                            <td>黑盗版功能</td>
                            <td class="text-center">
                            	<span class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-check"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-check"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-check"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-check"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;"><i class="fa fa-close"></i></span>
							</td>
                        </tr>
                        <tr class="">
                            <td>使用查询功能</td>
                            <td class="text-center">
                            	<span class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-check"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-check"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-check"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-check"></i></span>
								<span class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-check"></i></span>
							</td>
                        </tr>
                    </tbody>
                </table>
            </div>
          </div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
		</div>
    </div>
  </div>
</div>
<?php

$my=isset($_GET['my'])?$_GET['my']:null;

if($my=='add')
{
echo '<form action="./ulist.php?my=add_submit" method="POST">
<div class="form-group">
<label>用户名:</label><br>
<input type="text" class="form-control" name="user" value="" required>
</div>
<div class="form-group">
<label>密码:</label><br>
<input type="text" class="form-control" name="pwd" value="" required>
</div>
<div class="form-group">
<label>联系QQ:</label><br>
<input type="text" class="form-control" name="qq" value="">
</div>
<div class="form-group">
<label>用户昵称:</label><br>
<input type="text" class="form-control" name="name" value="">
</div>
<div class="form-group">
<label>用户权限:</label>
<select name="power" class="form-control" default="'.$row['power'].'"><option value="1">超级授权商</option><option value="2">日站协助员</option><option value="3">易支付认证商</option><option value="4">域名授权商</option><option value="5">普通用户</option></select>
</div>
<div class="form-group">
<label>用户状态:</label>
<select name="active" class="form-control"><option value="1">1_激活</option><option value="0">0_封禁</option></select>
</div>
<input type="submit" class="btn btn-primary btn-block" value="确定添加"></form>';
echo '<br/><a href="./ulist.php">>>返回代理列表</a>';
echo '</div></div>';
}
elseif($my=='edit')
{
$id=intval($_GET['id']);
$row=$DB->get_row("select * from auth_daili where uid='$id' limit 1");
echo '<form action="./ulist.php?my=edit_submit&id='.$id.'" method="POST">
<div class="form-group">
<label>用户名:</label><br>
<input type="text" class="form-control" name="user" value="'.$row['user'].'" required>
</div>
<div class="form-group">
<label>密码:</label><br>
<input type="text" class="form-control" name="pwd" value="'.$row['pass'].'" required>
</div>
<div class="form-group">
<label>联系QQ:</label><br>
<input type="text" class="form-control" name="qq" value="'.$row['qq'].'">
</div>
<div class="form-group">
<label>用户昵称:</label><br>
<input type="text" class="form-control" name="name" value="'.$row['name'].'">
</div>
<div class="form-group">
<label>常用登陆地:</label><br>
<input type="text" class="form-control" name="citylist" value="'.$row['citylist'].'" placeholder="多个登录地用,隔开">
</div>
<div class="form-group">
<label>用户权限:</label>
<select name="power" class="form-control" default="'.$row['power'].'"><option value="1">超级授权商</option><option value="2">日站协助员</option><option value="3">易支付认证商</option><option value="4">域名授权商</option></select>
</div>
<div class="form-group">
<label>用户状态:</label>
<select name="active" class="form-control" default="'.$row['active'].'"><option value="1">1_激活</option><option value="0">0_封禁</option></select>
</div>
<input type="submit" class="btn btn-primary btn-block" value="确定修改"></form>';
echo '<br/><a href="./ulist.php">>>返回代理列表</a>';
echo '</div></div>';
}
elseif($my=='add_submit')
{
$user=$_POST['user'];
$pwd=$_POST['pwd'];
$qq=$_POST['qq'];
$power=$_POST['power'];
$active=$_POST['active'];
$name=$_POST['name'];
if($user==NULL or $pwd==NULL or  $qq==NULL or $active==NULL or $name==NULL){
showmsg('保存错误,请确保每项都不为空!',3);
} else {
$rows=$DB->get_row("select * from auth_daili where user='$user' limit 1");
if($rows)
exit("<script language='javascript'>alert('用户名已存在！');window.location.href='ulist.php?my=add';</script>");
$sql="insert into `auth_daili` (`user`,`pass`,`qq`,`power`,`name`,`active`,`boss`) values ('".$user."','".$pwd."','".$qq."','".$power."','".$name."','".$active."','{$daili_id}')";
if($DB->query($sql)){
	showmsg('添加代理成功！<br/><br/><a href="./ulist.php">>>返回代理列表</a>',1);
$city=get_ip_city($clientip);
$users=$udata['user'];
$DB->query("insert into `auth_log` (`uid`,`type`,`date`,`city`,`data`) values ('".代理.$users."','添加代理','".$date."','".$city."','IP：".$clientip." |用户名：".$user." |QQ：".$qq." |称呼：".$name."')");
}else
	showmsg('添加代理失败！'.$DB->error(),4);
}
}
elseif($my=='edit_submit')
{
$id=intval($_GET['id']);
$rows=$DB->get_row("select * from auth_daili where uid='$id' limit 1");
if(!$rows)
	showmsg('当前记录不存在！',3);
$user=$_POST['user'];
$pwd=$_POST['pwd'];
$qq=$_POST['qq'];
$power=$_POST['power'];
$citylist=$_POST['citylist'];
$active=$_POST['active'];
$name=$_POST['name'];
if($user==NULL or $pwd==NULL or $qq==NULL or $name==NULL){
showmsg('保存错误,请确保每项都不为空!',3);
} else {
if($DB->query("update auth_daili set user='$user',pass='$pwd',qq='$qq',power='$power',name='$name',citylist='$citylist',active='$active' where uid='{$id}'")){
	showmsg('修改代理成功！<br/><br/><a href="./ulist.php">>>返回代理列表</a>',1);
$city=get_ip_city($clientip);
$users=$udata['user'];
$DB->query("insert into `auth_log` (`uid`,`type`,`date`,`city`,`data`) values ('".代理.$users."','修改代理','".$date."','".$city."','IP：".$clientip." |用户名：".$user." |QQ：".$qq." |称呼：".$name."')");
}else
	showmsg('修改代理失败！'.$DB->error(),4);
}
}
elseif($my=='delete')
{
$id=intval($_GET['id']);
$sql="DELETE FROM auth_daili WHERE uid='$id'";
if($DB->query($sql)){
$city=get_ip_city($clientip);
$DB->query("insert into `auth_log` (`uid`,`type`,`date`,`city`,`data`) values ('".代理.$user."','删除代理','".$date."','".$city."','IP：".$clientip."')");
	showmsg('删除成功！<br/><br/><a href="./ulist.php">>>返回代理列表</a>',1);
}else
	showmsg('删除失败！'.$DB->error(),4);
}
else
{
	
$numrows=$DB->count("SELECT count(*) from auth_daili WHERE boss='{$daili_id}'");
if(isset($_GET['qq'])){
	$sql = " qq={$_GET['qq']}";
}elseif(isset($_GET['kw'])){
	$sql = " qq='{$_GET['kw']}'";
}else{
	$sql = " 1";
}
$con='您旗下共有 <b>'.$numrows.'</b> 个代理用户<br/><a href="./ulist.php?my=add" class="btn btn-primary">添加用户</a>&nbsp;<a href="#" data-toggle="modal" data-target="#search" id="search" class="btn btn-success">搜索</a>&nbsp;<a href="#" data-toggle="modal" data-target="#jieshao" id="jieshao" class="btn btn-success">等级介绍</a>';

echo '<div class="alert alert-info">';
echo $con;
echo '</div>';

?>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead><tr><th>UID</th><th>昵称</th><th>用户名</th><th>QQ</th><th>上次登录</th><th>用户等级</th><th>用户状态</th><th>操作</th></tr></thead>
          <tbody>
<?php
$pagesize=30;
$pages=intval($numrows/$pagesize);
if ($numrows%$pagesize)
{
 $pages++;
 }
if (isset($_GET['page'])){
$page=intval($_GET['page']);
}
else{
$page=1;
}
$offset=$pagesize*($page - 1);

$rs=$DB->query("SELECT * FROM auth_daili WHERE{$sql} and boss='{$udata['uid']}' order by uid desc limit $offset,$pagesize");
while($res = $DB->fetch($rs))
{
if($res['active']==0){$q="封禁";}elseif($res['active']==1){$q="正常";}
if($res['power']==1){$p="超级授权商";}elseif($res['power']==2){$p="日站协助员";}elseif($res['power']==3){$p="易支付授权商";}elseif($res['power']==4){$p="域名授权商";}elseif($res['power']==5){$p="普通用户";}
echo '<tr><td><b>'.$res['uid'].'</b></td><td><b>'.$res['name'].'</b></td><td>'.$res['user'].'</td><td><a href="tencent://message/?uin='.$res['qq'].'&amp;Site=qq&amp;Menu=yes">'.$res['qq'].'</a></td><td>'.$res['last'].'</td><td>'.$p.'</td><td>'.$q.'</td><td><a href="./ulist.php?my=edit&id='.$res['uid'].'" class="btn btn-info btn-xs">编辑</a>&nbsp;<a href="./urllist.php?uid='.$res['uid'].'" class="btn btn-warning btn-xs">域名</a>&nbsp;<a href="./log.php?my=search&column=uid&value='.$res['user'].'" class="btn btn-success btn-xs">日志</a>&nbsp;<a href="./ulist.php?my=delete&id='.$res['uid'].'" class="btn btn-xs btn-danger" onclick="return confirm(\'你确实要删除此代理用户吗？\');">删除</a></td></tr>';
}
?>
          </tbody>
        </table>
      </div>
<?php
echo'<ul class="pagination">';
$first=1;
$prev=$page-1;
$next=$page+1;
$last=$pages;
if ($page>1)
{
echo '<li><a href="ulist.php?page='.$first.$link.'">首页</a></li>';
echo '<li><a href="ulist.php?page='.$prev.$link.'">&laquo;</a></li>';
} else {
echo '<li class="disabled"><a>首页</a></li>';
echo '<li class="disabled"><a>&laquo;</a></li>';
}
for ($i=1;$i<$page;$i++)
echo '<li><a href="ulist.php?page='.$i.$link.'">'.$i .'</a></li>';
echo '<li class="disabled"><a>'.$page.'</a></li>';
if($pages>=10)$pages=10;
for ($i=$page+1;$i<=$pages;$i++)
echo '<li><a href="ulist.php?page='.$i.$link.'">'.$i .'</a></li>';
echo '';
if ($page<$pages)
{
echo '<li><a href="ulist.php?page='.$next.$link.'">&raquo;</a></li>';
echo '<li><a href="ulist.php?page='.$last.$link.'">尾页</a></li>';
} else {
echo '<li class="disabled"><a>&raquo;</a></li>';
echo '<li class="disabled"><a>尾页</a></li>';
}
echo'</ul>';
#分页
}
?>
    </div>
  </div>
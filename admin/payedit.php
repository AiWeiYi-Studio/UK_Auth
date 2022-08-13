<?php
/**
 * 易支付认证编辑
**/
include("../includes/common.php");
$title='认证平台编辑授权';
include './head.php';
if($islogin==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
<?php
if($_GET['my']=='edit') {
$id=intval($_GET['id']);
$row=$DB->get_row("SELECT * FROM auth_pays WHERE id='{$id}' limit 1");
if($row=='')exit("<script language='javascript'>alert('认证平台不存在该记录！');history.go(-1);</script>");
if(isset($_POST['submit'])) {
	$qq=daddslashes($_POST['qq']);
	$url=daddslashes($_POST['url']);
	$name=daddslashes($_POST['name']);
	$active=intval($_POST['active']);
	{
		$sql="update `auth_pays` set `qq` ='{$qq}',`url` ='{$url}',`name` ='{$name}',`active` ='{$active}' where `id`='{$id}'";
		if($DB->query($sql))showmsg('修改成功！',1,$_POST['backurl']);
		else showmsg('修改失败！<br/>'.$DB->error(),4,$_POST['backurl']);
	}
}else{
?>
<div class="block">
<div class="block-title"><h3 class="panel-title">易支付认证编辑</h3></div>
<div class="panel-body">
          <form action="./payedit.php?my=edit&id=<?php echo $id; ?>" method="post" class="form-horizontal" role="form">
		  <input type="hidden" name="backurl" value="<?php echo $_SERVER['HTTP_REFERER']; ?>"/>
            <div class="form-group">
              <label class="col-sm-2 control-label">认证QQ</label>
              <div class="col-sm-10"><input type="text" name="qq" value="<?php echo $row['qq']; ?>" class="form-control" required/></div>
            </div><br/>
			<div class="form-group">
              <label class="col-sm-2 control-label">认证域名</label>
              <div class="col-sm-10"><input type="text" name="url" value="<?php echo $row['url']; ?>" class="form-control" required/></div>
            </div><br/>
			<div class="form-group">
              <label class="col-sm-2 control-label">网站名称</label>
              <div class="col-sm-10"><input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" required/></div>
            </div><br/>
			<div class="form-group">
              <label class="col-sm-2 control-label">认证状态</label>
              <div class="col-sm-10"><select name="active" class="form-control">
				<?php if($row['active']==1){?>
                <option value="1">激活</option>
                <option value="0">封禁</option>
				<?php }else{?>
				<option value="0">封禁</option>
				<option value="1">激活</option>
				<?php }?>
              </select></div>
            </div><br/>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10"><input type="submit" name="submit" value="修改" class="btn btn-primary form-control"/><br/>
			  <a href="./paylist.php">返回认证列表</a></div>
            </div>
          </form>
        </div>
      </div>
<?php
}
}elseif($_GET['my']=='del'){
	$id=intval($_GET['id']);
	$row=$DB->get_row("SELECT * FROM auth_pays WHERE id='{$id}' limit 1");
	$sql="DELETE FROM auth_pays WHERE id='$id' limit 1";
	$city=get_ip_city($clientip);
$DB->query("insert into `auth_log` (`uid`,`type`,`date`,`city`,`data`) values ('".站长.$user."','删除易支付认证','".$date."','".$city."','".$clientip."')");
	if($DB->query($sql)){showmsg('删除成功！',1,$_SERVER['HTTP_REFERER']);
	}
	else showmsg('删除失败！<br/>'.$DB->error(),4,$_SERVER['HTTP_REFERER']);
}
?>
    </div>
  </div>
<?php
/**
 * 添加认证平台授权
**/
include("../includes/common.php");
$title='添加认证平台授权';
include './head.php';
if($islogin==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
<?php
if(isset($_POST['qq']) && isset($_POST['url'])){
$qq=daddslashes($_POST['qq']);
$longurl = ($_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://').$_POST['url'].'/';
$url=''.$longurl.'';
$name=daddslashes($_POST['name']);
$active=daddslashes($_POST['active']);
$sql="insert into `auth_pays` (`qq`,`url`,`name`,`date`,`active`) values ('".$qq."','".$url."','".$name."','".$date."','".$active."')";
$DB->query($sql);
$city=get_ip_city($clientip);
$DB->query("insert into `auth_log` (`uid`,`type`,`date`,`city`,`data`) values ('".站长.$user."','添加易支付授权','".$date."','".$city."','".$clientip."|".$qq."|".$url."|".$name."')");
exit("<script language='javascript'>alert('添加成功');window.location.href='./paylist.php';</script>");
} ?>
<div class="block">
<div class="block-title"><h3 class="panel-title">添加易支付认证</h3></div>
<div class="card-body">
          <form action="./addpay.php" method="post" class="form-horizontal" role="form">
            <div class="input-group">
              <span class="input-group-addon">认证QQ</span>
              <input type="text" name="qq" value="" class="form-control" placeholder="这里填QQ哦" autocomplete="off" required/>
            </div><br/>
            <div class="input-group">
              <span class="input-group-addon">认证域名</span>
              <input type="text" name="url" value="" class="form-control" placeholder="这里填域名哦" autocomplete="off" required/>
            </div><br/>
            <div class="input-group">
              <span class="input-group-addon">网站名称</span>
              <input type="text" name="name" value="" class="form-control" placeholder="这里填名字哦" autocomplete="off" required/>
            </div><br/>
            <div class="input-group">
              <span class="input-group-addon">是否激活</span>
              <select name="active" class="form-control">
              <option value="1">1_激活</option>
              <option value="0">0_封禁</option>
            </select></div><br>
            <div class="form-group">
              <div class="col-sm-12"><input type="submit" value="添加认证授权" class="btn btn-primary form-control"/></div>
            </div>
          </form>
        </div>
        <div class="panel-footer">
          <span class="glyphicon glyphicon-info-sign"></span> 加入易支付认证授权
        </div>
      </div>
    </div>
  </div>
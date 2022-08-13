<?php
/**
 * 添加站点
**/
include("../includes/common.php");
$title='老加授权';
include './head.php';
if($islogin==1){}else exit("<script language='javascript'>alert('您还未登录,请先登录才能进入！');window.location.href='./login.php';</script>");
echo '<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">';
?>
<?php
if(isset($_POST['qq']) && isset($_POST['url'])){
$qq=daddslashes($_POST['qq']);
$url=daddslashes($_POST['url']);
$daili=daddslashes($_POST['daili']);
$key=daddslashes($_POST['key']);
$row=$DB->get_row("SELECT * FROM auth_site WHERE uid='{$qq}' limit 1");
if($row=='')exit("<script language='javascript'>alert('授权平台不存在该QQ！');history.go(-1);</script>");
if($row['active']==0)exit("<script language='javascript'>alert('此QQ的授权已被封禁！');history.go(-1);</script>");
$url=str_replace('，',',',$url);
$url_arr=explode(',',$url);
$re='';
foreach($url_arr as $val) {
	$row1=$DB->get_row("SELECT * FROM auth_site WHERE url='{$val}' limit 1");
	if($row1!='')continue;
	$sql="insert into `auth_site` (`uid`,`url`,`date`,`authcode`,`active`,`sign`,`daili`,`key`) values ('".$qq."','".trim($val)."','".$date."','".$row['authcode']."','1','".$row['sign']."','".$daili."','".$key."')";
	$DB->query($sql);
	$re.=$val.',';
}
if($re){
$city=get_ip_city($clientip);
$DB->query("insert into `auth_log` (`uid`,`type`,`date`,`city`,`data`) values ('".站长.$user."','添加站点授权','".$date."','".$city."','".$clientip."|".$qq."|".$url."|".$re."')");
exit("<script language='javascript'>alert('{$re}添加成功！');window.location.href='./downfile.php?url={$val}';</script>");
}else
exit("<script language='javascript'>alert('添加失败，可能域名已存在！');history.go(-1);</script>");
} ?>
<div class="block">
<div class="block-title"><h3 class="panel-title">老加授权</h3></div>
<div class="card-body">
          <form action="./addsite.php" method="post" class="form-horizontal" role="form">
            <div class="input-group">
              <span class="input-group-addon">ＱＱ</span>
              <input type="text" name="qq" value="<?=@$_POST['qq']?>" class="form-control" placeholder="购买授权的QQ" autocomplete="off" required/>
            </div><br/>
            <div class="input-group">
              <span class="input-group-addon">域名</span>
              <input type="text" name="url" value="<?=@$_POST['url']?>" class="form-control" placeholder="www.ukyun.cn,ukyun.cn" autocomplete="off" required/>
            </div><br/>
            <div class="input-group">
              <span class="input-group-addon">秘钥</span>
              <input type="text" name="key" value="<?=strtoupper(md5(time()."^%$#"))?>" class="form-control" placeholder="32位秘钥" autocomplete="off" required/>
            </div><br/>
            <div class="input-group">
              <span class="input-group-addon">隶属用户</span>
              <input type="text" name="daili" value="admin" class="form-control" placeholder="填用户uid可以转到用户账下" autocomplete="off" required/>
            </div><br/>
            <div class="form-group">
              <div class="col-sm-12"><input type="submit" value="添加" class="btn btn-primary form-control"/></div>
            </div>
          </form>
        </div>
        <div class="panel-footer">
          <span class="glyphicon glyphicon-info-sign"></span> 添多个域名请用英文逗号 , 隔开<br>添加多个域名会导致秘钥与用户ID一样！
        </div>
      </div>
    </div>
  </div>
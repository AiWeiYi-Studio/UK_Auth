<?php
/**
 * 卡密授权
**/
include("../includes/common.php");
@header('Content-Type: text/html; charset=UTF-8');
$title='卡密授权';
if($islogins==1){}else exit("<script language='javascript'>alert('您还未登录,请先登录才能进入！');window.location.href='./login.php';</script>");
include './head.php';
echo '<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">';
if($_POST['do'] == 'pay'){
	$km = daddslashes($_POST['km']);
	$qq = daddslashes($_POST['qq']);
	$url = daddslashes($_POST['url']);
	$pdurl=$DB->get_row("SELECT * FROM auth_site WHERE url='{$url}' limit 1");
if($pdurl!='')exit("<script language='javascript'>alert('授权平台已存在该域名！');history.go(-1);</script>");
    		$kmlist=$DB->get_row("SELECT * FROM auth_kms WHERE km='$km' limit 1");
    if(!$kmlist){
        echo "<script language='javascript'>alert('卡密不存在！');</script>";
    }elseif($kmlist['zt']==0){
        echo "<script language='javascript'>alert('该卡密已使用！');</script>";
    }else{
        $DB -> query("update auth_kms set zt=0 where id='{$kmlist['id']}'");
        $row1=$DB->get_row("SELECT * FROM auth_site WHERE 1 order by sign desc limit 1");
        $sign=$row1['sign']+1;
        $authcode=md5(random(32).$qq);
	       $sql="insert into `auth_site` (`uid`,`url`,`date`,`authcode`,`active`,`sign`,`daili`) values ('$qq','$url','$date','$authcode','1','$sign','".$udata['uid']."')";
	       $DB->query($sql);
	       $city=get_ip_city($clientip);
        $DB->query("insert into `auth_log` (`uid`,`type`,`date`,`city`,`data`) values ('".代理.$user."','使用卡密添加授权','".$date."','".$city."','QQ：".$qq."|域名：".$url."|卡密：".$km."')");
        exit("<script language='javascript'>alert('添加授权成功！');window.location.href='./downfile.php?url=$url';</script>");
    }
  }
?>
<script type="text/javascript">
	  function getValue(obj,str){
	  var input=window.document.getElementById(obj);
	  input.value=str;
	  }
</script>
<script>
function checkURL()
{
	var url;
	url = document.auth.url.value;

	if (url.indexOf(" ")>=0){
		url = url.replace(/ /g,"");
		document.auth.url.value = url;
	}
	if (url.toLowerCase().indexOf("http://")==0){
		url = url.slice(7);
		document.auth.url.value = url;
	}
	if (url.toLowerCase().indexOf("https://")==0){
		url = url.slice(8);
		document.auth.url.value = url;
	}
	if (url.slice(url.length-1)=="/"){
		url = url.slice(0,url.length-1);
		document.auth.url.value = url;
	}
}
</script>
<div class="block">
<div class="block-title"><h3 class="panel-title">卡密授权</h3></div>
<div class="card-body">
<form class="form-horizontal" method="post" name="auth">
<input type="hidden" name="do" value="pay">
<form action="?" class="form-sign" method="post">
<div class="input-group">
<span class="input-group-addon">授权域名</span>
<input type="text" class="form-control" name="url" onkeyup="checkURL();" placeholder="请输入要授权的域名" required>
</div><br>

<div class="input-group">
<span class="input-group-addon">授权扣扣</span>
<input type="text" class="form-control" name="qq" onkeyup="value=value.replace(/[^1234567890]+/g,'')" placeholder="请输入要授权的QQ" required>
</div><br>

<div class="input-group">
<span class="input-group-addon">授权卡密</span>
<input type="text" class="form-control" name="km" placeholder="请输入购买授权的卡密" required>
</div><br>

<input type="submit" class="btn btn-primary btn-block" name="submit" value="点击授权">
</div><br>
</div>
</div>
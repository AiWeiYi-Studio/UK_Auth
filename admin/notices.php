<?php
/**
 * 系统通知发送
**/
include("../includes/common.php");
$title='系统通知发送';
include './head.php';
if($islogin==1){}else exit("<script language='javascript'>alert('您还未登录,请先登录才能进入！');window.location.href='./login.php';</script>");
echo '<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">';
$qq=(isset($_GET['qq'])?$_GET['qq']:NULL);
$url=(isset($_GET['url'])?$_GET['url']:NULL);
$mail_name=($qq ? $qq:$conf['mail_name']);
if(!empty($mail_name)){
	$result=send_mail($mail_name,''.$conf['title'].'系统通知',''.通知内容：.'<br>'.$conf['notice'].'<br><br>您的授权域名：.'.$url.'<br>来自：'.$conf['title']);
if ($result == 1){
	showmsg('邮件发送成功！', 1);
}else{
	showmsg('邮件发送失败！'.$result,3);
}
}else{
	showmsg('您还未设置邮箱！', 3);
}
?>
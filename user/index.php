<?php
/**
 * 后台管理
**/
$mod='blank';
include("../includes/common.php");
$title='后台管理';
if($islogins==1){}else exit("<script language='javascript'>alert('您还未登录,请先登录才能进入！');window.location.href='./login.php';</script>");
include './head.php';
?>
<?php
$juzi = 'https://api.ukyun.cn/yan/api.php';
$juzis = file_get_contents($juzi); 
$users=$DB->count("SELECT count(*) from auth_daili");
$admins=$DB->count("SELECT count(*) from auth_user");
$blocks=$DB->count("SELECT count(*) from auth_block");
$sites=$DB->count("SELECT count(*) from auth_site");
$pays=$DB->count("SELECT count(*) from auth_pays");
?>
<?php
if($udata['access_token']==''){
$kuaijie="<a href='./binding.php'>未绑定（点击绑定）</a>";
}elseif($udata['access_token'] !==''){
$kuaijie="<a href='./binding.php?jiebang'>已绑定（点击解绑）</a>";
}
?>
<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
<div class="block">
<div class="block-title"><h3 class="panel-title">后台首页</h3></div>
          <ul class="list-group">
				<center><li class="list-group-item"><img src="//q4.qlogo.cn/headimg_dl?dst_uin=<?=$udata['qq']?>&spec=100" alt="Avatar" width="60" height="60" style="border:1px solid #FFF;-moz-box-shadow:0 0 3px #AAA;-webkit-box-shadow:0 0 3px #AAA;border-radius: 50%;box-shadow:0 0 3px #AAA;padding:3px;margin-right: 3px;margin-left: 6px;"><br>&nbsp;&nbsp;
&nbsp;UID：<font color="orange"><?=$udata['uid']?></b></font></br>昵称：<font color="orange"><b><?=$udata['name']?></b></font> </br>QQ：<font color="orange"><b><?=$udata['qq']?></b></font><font color="orange"></font> </br><b>尊敬的<?=$udata['name']?>，欢迎来到代理后台中心</b></li></center>

<li class="list-group-item"><span class="glyphicon glyphicon-stats"></span> <b>统计：</b>正版:<?=$sites?>,盗版:<?=$blocks?>,站长数:<?=$admins?>,用户数:<?=$users?>,认证数:<?=$pays?></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-time"></span> <b>时间：</b> <?=$date?></li>
            
            <li class="list-group-item"><span class="glyphicon glyphicon-envelope"></span> <b>权限：</b> 
            <?php  
            if($udata['power']==1){
		$powers='超级授权商';
	}else if($udata['power']==2){
		$powers='日站协助员';
	}else if($udata['power']==3){
		$powers='易支付认证商';
	}else if($udata['power']==4){
		$powers='域名授权商';
	}else if($udata['power']==5){
		$powers='普通用户(部分功能不显示)';
	}
	echo '<tr><td>'.$powers.'</td>  </td></tr>';?></li>
            
            <li class="list-group-item"><span class="fa fa-calendar sidebar-nav-icon"></span> <b>名言：</b> <?=$juzis?></li>
            
             <li class="list-group-item"><span class="glyphicon glyphicon-user"></span> <b>快捷：</b><font color="#1701EA"><a href="#" onclick='<?=$login?>'"><?=$kuaijie?></a></font> &nbsp;</li>
             
            <li class="list-group-item"><span class="glyphicon glyphicon-list"></span> <b>菜单：</b> 
              <a href="./ulist.php" class="btn btn-xs btn-success">用户管理</a>
			  <a href="./password.php" class="btn btn-xs btn-danger">修改密码</a>
 </div></div>
			 <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
<div class="block">
<div class="block-title"><h3 class="panel-title">授权平台公告</h3></div>
<ul class="list-group">
 <li class="list-group-item"></b></span>
 <?php echo $conf['gg']?>
 </div></div></div></div></div>
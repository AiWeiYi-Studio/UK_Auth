<?php
/**
 * 源码下载
**/
include("../includes/common.php");
$title='获取下载';
include './head.php';
if($islogins==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
if(isset($_GET['url'])) {
$url=daddslashes($_GET['url']);
$row=$DB->get_row("SELECT * FROM auth_site WHERE url='{$url}' limit 1");
if($row=='')exit("<script language='javascript'>alert('授权平台不存在该域名！');history.go(-1);</script>");
if($row['active']==0)exit("<script language='javascript'>alert('此域名授权已被封禁！');history.go(-1);</script>");
$authcode=$row['authcode'];
$uid=$row['uid'];
$sign=$row['sign'];
echo '<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">';
?>
<div class="block">
<div class="block-title"><h3 class="panel-title">下载管理</h3></div>
<div class="card-body">
<li class="list-group-item"><span class="fa fa-qq"></span> <b>授权ＱＱ：</b> <b>  <?=$uid?></b></li>
<li class="list-group-item"><span class="fa fa-cloud"></span> <b>授权域名：</b> <b>  <?=$url?></b></li>
<li class="list-group-item"><span class="fa fa-heart"></span> <b>授权代码：</b> <b>  <?=$authcode?></b></li>
<li class="list-group-item"><span class="fa fa-internet-explorer"></span> <b>特征代码：</b> <b>  <?=$sign?></b></li>
<li class="list-group-item"><span class="fa fa-bars"></span> <b>下载类型：</b> 
<a href="../includes/downfile.php?my=installer&authcode=<?=$authcode?>&sign=<?=$sign?>&r=<?=time()?>" class="btn btn-xs btn-success"><?=$name?>安装包</a>&nbsp;
<a href="../includes/downfile.php?my=updater&authcode=<?=$authcode?>&sign=<?=$sign?>&r=<?=time()?>" class="btn btn-xs btn-primary"><?=$name?>更新包</a>
</li>
</ul>
<div class="panel-footer">
<span class="fa fa-volume-down"></span> 新购用户请下载完整安装包！
</div>
</div>
<?php }else{?>
<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
<div class="block">
<div class="block-title"><h3 class="panel-title">源码下载</h3></div>
</ul>
<div class="tab-content">
<div class="tab-pane active">
<form action="./downfile.php" method="GET" class="form-horizontal" role="form">
	
<div class="form-group">
<label for="web_site_title">授权域名</label>
<input type="text" name="url" value="<?=@$_GET['url']?>" class="form-control" placeholder="授权的域名" autocomplete="off" autofocus="autofocus" required/>
</div>

<div class="form-group">
<button type="submit" class="btn btn-effect-ripple btn-primary">获取</button>
</div>
</div>
</form>
</div>
</div>

<div class="block">
<div class="block-title"><h3 class="panel-title">使用教程</h3></div>
<div class="card-body">
</p>
1、如果需要全新搭建或之前未搭建过，请下载完整安装包；如果之前搭建过，请下载更新包直接覆盖，数据不会丢失。</p>
2、输入您的购买授权的QQ来获取下载即可，通过验证后即可下载更新包&安装包，或者你也可以联系客服获取源码。</p>
</div>
</div>
</div>
<?php }?>
<?php
include("../includes/common.php");
if($conf['download']==close){
	sysmsg("<h3>站点已被管理员停止！<h3>");
}
if ($conf['download'] && file_exists("../template/get/{$conf['download']}/index.php")){
	$template = $conf['download'];
	
}else{
	$template = "moyu";
}
include("../template/get/{$template}/index.php");
?>
<p style="text-align:center"><br>&copy; Powered by <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['qq']?>&site=qq&menu=yes"><?php echo $conf['title']?></a></p></div>
</body>
</html>
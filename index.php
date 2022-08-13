<?php
include("./includes/common.php");
if($conf['repair']==1){
	sysmsg("<h3>站点已被管理员停止！<h3>");
}
if ($conf['muban'] && file_exists("./template/index/{$conf['muban']}/index.php")){
	$template = $conf['muban'];
	
}else{
	$template = "major";
}
include("./template/index/{$template}/index.php");
?>
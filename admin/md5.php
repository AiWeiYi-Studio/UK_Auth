<?php
/**
 * md5加密
**/
include("../includes/common.php");
$title='MD5加密';
include './head.php';
if ($islogin!=1) {
    exit('<script language=\'javascript\'>window.location.href=\'./login.php\';</script>');
}
echo '<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">';
if($udata['uid'] !=='1'){
	showmsg('您的账号没有权限使用此功能',3);
	exit;
}
?>
<?php
$hu   = 'mds';
$mds  = $_POST['mds']?$_POST['mds']:$_GET['mds'];
$mds  = $mds?$mds:"UK云工作室";
$typ  = $_POST['Md5Type'];
$mds1 = strtoupper(md5($mds));
$mds2 = strtolower($mds1);
$mds3 = substr($mds1,8,16);
$mds4 = strtolower($mds3);
if($typ == '3'){
	$results  = $mds4;
}elseif($typ == '1'){
	$results =  $mds2;
}elseif($typ == '2'){
	$results = $mds3;
}else{
	$results = $mds1;
}
?>
<div class="panel panel-primary">
<div class="panel-heading" style="background:linear-gradient(to right,#14b7ff,#b221ff);"><h3 class="panel-title">MD5在线加密</h3></div>
       <div class="panel-body">
	  <form action="" method="post">
	  <div class="list-group-item">
                    <div class="input-group">
                        <div class="input-group-addon">欲加密的字符串</div>
                        <input  class="form-control" name="mds" type="text" id="mds" size="35" url="true" value="<?php echo $mds;?>"/>
                    </div>
                </div>
			  <div class="form-group" style="text-align:center;">
											<label class="radio-inline c-radio">
												<input id="md32l" name="Md5Type" value="0" <?php if($typ==0) echo "checked";?> type="radio" /> 
												<span class="fa fa-check"></span><font color="green">32位[大]</font>
											</label>
											<label class="radio-inline c-radio">
												<input id="md32s" name="Md5Type" value="1" <?php if($typ==1) echo "checked";?> type="radio" />
												<span class="fa fa-check"></span><font color="green"> 32位[小]</font>
											</label>
											</div>
											<div class="form-group" style="text-align:center;">
											<label class="radio-inline c-radio">
												<input id="md16l" name="Md5Type" value="2" <?php if($typ==2) echo "checked";?> type="radio" />
												<span class="fa fa-check"></span><font color="green"> 16位[大]</font>
											</label>
											<label class="radio-inline c-radio">
												<input id="md16s" name="Md5Type" value="3" <?php if($typ==3) echo "checked";?> type="radio" />
												<span class="fa fa-check"></span><font color="green"> 16位[小]</font>
											</label>
									</div>
                        <center><input name="btnS" class="btn btn-primary btn-block" type="submit" value="加密"  id="sub"/></center>
                        </div>
		            </form>
                <div class="list-group-item">
                    <div class="input-group">
                        <div class="input-group-addon">加密后结果</div>
                        <input type="text" class="form-control" id="result"  value="<?php echo $results;?>">
                    </div>
                </div>     
      </div>
    </div>	
				</div>
			</div>
		</div>
	</div>
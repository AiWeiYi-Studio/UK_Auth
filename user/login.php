<?php
/**
 * 登录
**/
$mod='blank';
include("../includes/common.php");
if(isset($_POST['user']) && isset($_POST['pass'])){ 
	$user=daddslashes($_POST['user']);
	$pass=daddslashes($_POST['pass']);
	$code=daddslashes($_POST['code']);
	$row = $DB->get_row("SELECT * FROM auth_daili WHERE user='$user' limit 1");
    if(!$code || strtolower($_SESSION['ukyun_code'])!=strtolower($code)){
       exit ("<script language='javascript'>alert('登录失败，验证码错误！');history.go(-1)</script>");
	}elseif($row['user']=='') {
		@header('Content-Type: text/html; charset=UTF-8');
		exit("<script language='javascript'>alert('此用户不存在');history.go(-1);</script>");
	}elseif ($pass != $row['pass']) {
		@header('Content-Type: text/html; charset=UTF-8');
		exit("<script language='javascript'>alert('用户名或密码不正确！');history.go(-1);</script>");
	}elseif($row['active']==0){
		$city=get_ip_city($clientip);
		$DB->query("insert into `auth_log` (`uid`,`type`,`date`,`city`,`data`) values ('".代理.$user."','封禁账号申请登录','".$date."','".$city."','IP:".$clientip."')");
		@header('Content-Type: text/html; charset=UTF-8');
		exit("<script language='javascript'>alert('账号已封禁,请联系客服！');history.go(-1);</script>");
		}elseif($row['user']==$user && $row['pass']==$pass){
		$session=md5($user.$pass.$password_hash);
		$token=authcode("{$user}\t{$session}", 'ENCODE', UKYUN);
		setcookie("auth_token2", $token, time() + 604800);
		$_SESSION['auth']=true;
		@header('Content-Type: text/html; charset=UTF-8');
		$city=get_ip_city($clientip);
		$DB->query("update auth_daili set last='$clientip' where uid='{$row['uid']}'");
		$DB->query("insert into `auth_log` (`uid`,`type`,`date`,`city`,`data`) values ('".代理.$user."','登陆站长后台','".$date."','".$city."','IP:".$clientip."')");
		exit("<script language='javascript'>alert('恭喜你登录成功啦！');window.location.href='./';</script>");
	}
}elseif(isset($_GET['logout'])){
	setcookie("auth_token2", "", time() - 604800);
	@header('Content-Type: text/html; charset=UTF-8');
	exit("<script language='javascript'>alert('您已成功注销本次登陆！');window.location.href='./login.php';</script>");
}elseif($islogins==1){
	@header('Content-Type: text/html; charset=UTF-8');
	exit("<script language='javascript'>alert('您已登陆！');window.location.href='./';</script>");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <title><?php echo $conf['title']?>-后台登录</title>
  <link rel="icon" href="../assets/imgs/favicon.ico" type="image/ico">
  <meta name="keywords" content="<?php echo $conf['keywords']; ?>"/>
  <meta name="description" content="<?php echo $conf['description']; ?>"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="//cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="//cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="../assets/appui/css/main.css">
  <link rel="stylesheet" href="../assets/appui/css/themes.css">
  <script src="//cdn.staticfile.org/modernizr/2.8.3/modernizr.min.js"></script>
  <script src="//cdn.staticfile.org/jquery/2.1.4/jquery.min.js"></script>
  <script src="//cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../assets/appui/js/plugins.js"></script>
  <script src="../assets/appui/js/app2.js"></script>
  <link rel="stylesheet" href="../assets/appui/css/plugins.css">
</head>
<body>
<img src="<?php echo $conf['bjapi']?>" alt="Full Background" class="full-bg full-bg-bottom animation-pulseSlow">
      <div id="login-container">
            <h1 class="h2 text-light text-center push-top-bottom animation-pullDown">
                <i class="fa fa-cube text-light-op"></i> <strong><?php echo $conf['title']?></strong>
            </h1>
            <div class="block animation-fadeInQuick">
                <div class="block-title">
                    <h2>后台登录</h2>
                </div>
                <form id="form-login" action="login.php" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label for="login-email" class="col-xs-12">账号</label>
                        <div class="col-xs-12">
                            <input type="text" name="user" class="form-control" placeholder="Your username.." required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="login-password" class="col-xs-12">密码</label>
                        <div class="col-xs-12">
                            <input type="password" name="pass" class="form-control" placeholder="Your password.." required/>
                        </div>
                    </div>
    <div class="input-group">
<input type="text" class="form-control input-lg" name="code" onkeyup="this.value=this.value.replace(/\D/g,'')" maxlength="4" placeholder="输入验证码" autocomplete="off" required>
<span class="input-group-addon" style="padding: 0">
<img src="../includes/code.php?r=<?php echo time();?>"height="43"onclick="this.src='../includes/code.php?r='+Math.random();" title="点击更换验证码">
</span>
</div><br/>
                    <div class="form-group form-actions">
                        <div class="col-xs-8">
                            <label class="csscheckbox csscheckbox-primary">
                                <input type="checkbox" id="login-remember-me" name="login-remember-me"><span></span> 记住我?
                            </label>
                        </div>
                        <div class="col-xs-4 text-right">
                            <button type="submit" class="btn btn-effect-ripple btn-sm btn-success">登录</button>
                        </div>
                    </div>
                </form>
                <hr>
                <div class="push text-center">第三方登录</div>
                <div class="row push">
                    <div class="col-xs-6">
                      <a href="./reg.php" class="btn btn-effect-ripple btn-sm btn-info btn-block"><i class="fa fa-user"></i>注册</a>
                    </div>
                    <div class="col-xs-6">
                        <a href="./social.php" class="btn btn-effect-ripple btn-sm btn-primary btn-block"><i class="fa fa-qq"></i> QQ</a>
                    </div>
                </div>
            </div>
            <footer class="text-muted text-center animation-pullUp">
                <small><span id="year-copy"></span> &copy; <a href="" target="_blank"><?php echo $conf['title']?></a></small>
            </footer>
        </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
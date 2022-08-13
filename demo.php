<?php

$jumpurl='http://demoauth.ukyun.cn';//跳转地址

$title='UK云URL跳转系统';//站点标题

$time='2';//跳转时间

$banquan='UK云工作室';//底部版权

$banquanurl='http://host.ukyun.cn';//底部版权URL

if(strpos($_SERVER['HTTP_USER_AGENT'], 'QQ/')||strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger')!==false){

$siteurl='http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];

echo '

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="shortcut icon" href="https://www.ukyun.cn/assets/imgs/favicon.ico" />

<title>'.$title.'</title>

<link href="//cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>

  <link href="//cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">

    <style>

        body,html{width:100%;height:100%}

        *{margin:0;padding:0}

        body{background-color:#fff}

        #browser img{

            width:50px;

        }

        #browser{

            margin: 0px 10px;

            text-align:center;

        }

        #contens{

            font-weight: bold;

            margin:-285px 0px 10px;

            text-align:center;

            font-size:20px;

            margin-bottom: 125px;

        }

        .top-bar-guidance{font-size:15px;color:#fff;height:70%;line-height:1.8;padding-left:20px;padding-top:20px;background:url(//gw.alicdn.com/tfs/TB1eSZaNFXXXXb.XXXXXXXXXXXX-750-234.png) center top/contain no-repeat}

        .top-bar-guidance .icon-safari{width:25px;height:25px;vertical-align:middle;margin:0 .2em}

        .app-download-tip{margin:0 auto;width:290px;text-align:center;font-size:15px;color:#2466f4;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAcAQMAAACak0ePAAAABlBMVEUAAAAdYfh+GakkAAAAAXRSTlMAQObYZgAAAA5JREFUCNdjwA8acEkAAAy4AIE4hQq/AAAAAElFTkSuQmCC) left center/auto 15px repeat-x}

        .app-download-tip .guidance-desc{background-color:#fff;padding:0 5px}

        .app-download-btn{display:block;width:214px;height:40px;line-height:40px;margin:18px auto 0 auto;text-align:center;font-size:18px;color:#2466f4;border-radius:20px;border:.5px #2466f4 solid;text-decoration:none}

    </style>

        <style type="text/css">

        *{box-sizing:border-box;margin:0;padding:0;font-family:Lantinghei SC,Open Sans,Arial,Hiragino Sans GB,Microsoft YaHei,"微软雅黑",STHeiti,WenQuanYi Micro Hei,SimSun,sans-serif;-webkit-font-smoothing:antialiased}

        body{padding:70px 0;background:#edf1f4;font-weight:400;font-size:1pc;-webkit-text-size-adjust:none;color:#333}

        a{outline:0;color:#3498db;text-decoration:none;cursor:pointer}

        .system-message{margin:20px 5%;padding:40px 20px;background:#fff;box-shadow:1px 1px 1px hsla(0,0%,39%,.1);text-align:center}

        .system-message h1{margin:0;margin-bottom:9pt;color:#444;font-weight:400;font-size:40px}

        .system-message .jump,.system-message .image{margin:20px 0;padding:0;padding:10px 0;font-weight:400}

        .system-message .jump{font-size:14px}

        .system-message .jump a{color:#333}

        .system-message p{font-size:9pt;line-height:20px}

        .system-message .btn{display:inline-block;margin-right:10px;width:138px;height:2pc;border:1px solid #44a0e8;border-radius:30px;color:#44a0e8;text-align:center;font-size:1pc;line-height:2pc;margin-bottom:5px;}

        .success .btn{border-color:#69bf4e;color:#69bf4e}

        .error .btn{border-color:#69bf4e;color:#69bf4e}

        .info .btn{border-color:#3498db;color:#3498db}

        .copyright p{width:100%;color:#919191;text-align:center;font-size:10px}

        .system-message .btn-grey{border-color:#bbb;color:#bbb}

        .clearfix:after{clear:both;display:block;visibility:hidden;height:0;content:"."}

        @media (max-width:768px){body {padding:20px 0;}}

        @media (max-width:480px){.system-message h1{font-size:30px;}}

    </style>

</head>

<body>

<div class="top-bar-guidance">

    <p>点击右上角<img src="//gw.alicdn.com/tfs/TB1xwiUNpXXXXaIXXXXXXXXXXXX-55-55.png" class="icon-safari"> <span id="openm">Safari打开</span></p>

    <p>可以继续浏览本站哦~</p>

<center>

<br><br>

<img src="https://www.ukyun.cn/assets/favicon.ico" alt="" width="250"/>

<br><br>

<div id="browser">

<a href="mttbrowser://url='. $siteurl .'" class="btn btn-xs btn-success"><h4>点我跳转或点击右上角</h4></a></div>

<br><br>

<p><font color="#008080">Copyright &copy;</font><a href="'.$banquanurl.'"><font color="black"> '.$banquan.'</a></font></p>

</div>

</center>

</body>

</html>

';

}

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="shortcut icon" href="https://www.ukyun.cn/assets/imgs/favicon.ico" />

<title><?php echo $title;?></title>

</head>

<body>

<meta http-equiv="refresh" content="<?php echo $time;?>; url=<?php echo $jumpurl;?>">

</body>

</html>
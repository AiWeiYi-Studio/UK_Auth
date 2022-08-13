<?php
/**
 * bese64
**/
$mod='blank';
include("../includes/common.php");
$title='bese64';
include './head.php';
if($islogin==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
echo '<div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">';
if($udata['uid'] !=='1'){
	showmsg('您的账号没有权限使用此功能',3);
	exit;
}
?>
<script>
var keyStr = "ABCDEFGHIJKLMNOP" +
"QRSTUVWXYZabcdef" +
"ghijklmnopqrstuv" +
"wxyz0123456789+/" +
"=";
function encode64(input)
{
input = escape(input);
var output = "";
var chr1, chr2, chr3 = "";
var enc1, enc2, enc3, enc4 = "";
var i = 0;
do
{
chr1 = input.charCodeAt(i++);
chr2 = input.charCodeAt(i++);
chr3 = input.charCodeAt(i++);
enc1 = chr1 >> 2;
enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
enc4 = chr3 & 63;
if (isNaN(chr2))
{
enc3 = enc4 = 64;
}
else if (isNaN(chr3))
{
enc4 = 64;
}
output = output +
keyStr.charAt(enc1) +
keyStr.charAt(enc2) +
keyStr.charAt(enc3) +
keyStr.charAt(enc4);
chr1 = chr2 = chr3 = "";
enc1 = enc2 = enc3 = enc4 = "";
} while (i < input.length);
return output;
}
function decode64(input)
{
var output = "";
var chr1, chr2, chr3 = "";
var enc1, enc2, enc3, enc4 = "";
var i = 0;
// remove all characters that are not A-Z, a-z, 0-9, +, /, or =
var base64test = /[^A-Za-z0-9\+\/\=]/g;
if (base64test.exec(input))
{
alert("There were invalid base64 characters in the input text.\n" +
"Valid base64 characters are A-Z, a-z, 0-9, '+', '/', and '='\n" +
"Expect errors in decoding.");
}
input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");
do
{
enc1 = keyStr.indexOf(input.charAt(i++));
enc2 = keyStr.indexOf(input.charAt(i++));
enc3 = keyStr.indexOf(input.charAt(i++));
enc4 = keyStr.indexOf(input.charAt(i++));
chr1 = (enc1 << 2) | (enc2 >> 4);
chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
chr3 = ((enc3 & 3) << 6) | enc4;
output = output + String.fromCharCode(chr1);
if (enc3 != 64)
{
output = output + String.fromCharCode(chr2);
}
if (enc4 != 64)
{
output = output + String.fromCharCode(chr3);
}
chr1 = chr2 = chr3 = "";
enc1 = enc2 = enc3 = enc4 = "";
} while (i < input.length);
return unescape(output);
}
</script>

<div class="panel panel-default">
<div class="panel-heading font-bold" style="background-color: #9999CC;color: white;">base加密&解密</div>
<div class="panel-body">
<textarea id="contents" rows="10" class="form-control">这里是要加密的内容！</textarea><br>
<div class="text-center">
<button type="submit" class="btn btn-primary btn-block" onclick="contents.value=encode64(contents.value);">BASE64加密</button>
<br>
<button type="submit" class="btn btn-warning btn-block" onclick="contents.value=decode64(contents.value);">BASE64解密</button>
</div>
</div>
</div>
</div>
</div>
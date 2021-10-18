<?php
include('Mobile_Detect.php');
include('BrowserDetection.php');
include('db.php');

$browser=new Wolfcast\BrowserDetection;

$browser_name=$browser->getName();
$browser_version=$browser->getVersion();

$detect=new Mobile_Detect();

if($detect->isMobile()){
	$type='Mobile';
}elseif($detect->isTablet()){
	$type='Tablet';
}else{
	$type='PC';
}

if($detect->isiOS()){
	$os='IOS';
}elseif($detect->isAndroidOS()){
	$os='Android';
}else{
	$os='Window';
}

$post_id;
$url=(isset($_SERVER['HTTPS'])) ? "https":"http";
$url.="//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$ref='';
if(isset($_SERVER['HTTP_REFERER'])){
	$ref=$_SERVER['HTTP_REFERER'];
}
$sql="insert into visitor(post_id,url,ref) values('$post_id','$url','$ref')";
mysqli_query($con,$sql);
?>
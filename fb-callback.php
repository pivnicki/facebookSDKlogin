<?php

require_once"config.php";

try{
	$accessToken=$helper->getAccessToken();
	
}catch(\Facebook\Exceptions\FacebookResponseException $e){
	echo "Response Exception".$e->getMessage();
	exit();
}
catch(\Facebook\Exceptions\FacebookSDKException $e){
	echo "SDK Exception".$e->getMessage();
	exit();
}

if(!$accessToken){
	header('Location:login.php');
	exit();
}

$oAuth=$fb->getOAuth2Client();
if(!$accessToken->isLongLived()){
	$accessToken=$oAuth->getLongLivedAccessToken();
}

$response=$fb->get("/me?fields=id,first_name,last_name,email,picture.type(large)", $accessToken);
$userdata=$response->getGraphNode()->asArray();
$_SESSION['userdata']=$userdata;
$_SESSION['accessToken']=(string)$accessToken;
header("Location:index.php");
exit();
//var_dump($userdata);
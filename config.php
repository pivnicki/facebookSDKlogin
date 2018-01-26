<?php
session_start();
require_once("facebook/autoload.php");

$fb=new \Facebook\Facebook([
			'app_id' => '391854891256938',
            'app_secret' => '2c7e880607c6e0c3253a7036d016dee6',
            'default_graph_version' => 'v2.11',
]);

$helper=$fb->getRedirectLoginHelper();
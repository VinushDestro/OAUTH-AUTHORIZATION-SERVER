<?php
	session_start();

	require_once "Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => '137834737078799',
		'app_secret' => '11dd671cfc115fde940d208155a8eb52',
		'default_graph_version' => 'v3.0'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>
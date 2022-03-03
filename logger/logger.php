<?php
	$timestamp = date("d/m/Y H:i:s");
	$request = $_GET['uri'];
	$ip = $_SERVER['REMOTE_ADDR'];
	$user_agent = $_SERVER['HTTP_USER_AGENT'];

	file_put_contents("log.txt", "$timestamp | $request | $ip | $user_agent\n", FILE_APPEND);
?>
<?php
//db details
$hostUrl = $_SERVER['HTTP_HOST'];
//define('HOSTURL', $full_url);
$arrayHostUrl = explode('.', $hostUrl);
if($arrayHostUrl[sizeof($arrayHostUrl)-1]==="com"){
	$dbHost = 'localhost';
	$dbUsername = 'root';
	$dbPassword = 'Pass@987';
	$dbName = 'dotwised_jpinfra';
}else{
	$dbHost = 'localhost:3306';
	$dbUsername = 'root';
	$dbPassword = '';
	$dbName = 'jpinfra';
}

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>
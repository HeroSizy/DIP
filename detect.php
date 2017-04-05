<?php
$ip = '172.21.89.228';
$port = 22;
$username = 'dip2017';
$password = '123';

$conn = ssh2_connect($ip, $port);

chdir ('/home/scar/darknet');
// $ls = shell_exec('./darknet detect cfg/yolo.cfg yolo.weights /var/www/upload/photo.png');
// system('./darknet detect cfg/yolo.cfg yolo.weights /var/www/upload/photo.png');
$ls = shell_exec("./darknet detect cfg/yolo.cfg yolo.weights /var/www/upload/photo.png");
echo "<pre>";

var_dump($conn);
echo $ls;

echo "</pre>";

if (!$conn) {
  # code...
  echo "Connection failed !";
}

if(!ssh2_auth_password($conn,$username,$password)){
  echo "Authorization failed !";
}
?>
	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<title></title>
	</head>

	<body> </body>

	</html>

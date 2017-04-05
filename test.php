<?php
header('Content-Encoding: none;');

set_time_limit(0);
chdir ('/home/scar/darknet');
// $ls = shell_exec('./darknet detect cfg/yolo.cfg yolo.weights /var/www/upload/photo.png');
$handle = popen("wget", "r");

if (ob_get_level() == 0)
  ob_start();

while(!feof($handle)) {
  $buffer = fgets($handle);
  $buffer = trim(htmlspecialchars($buffer));
  echo "<pre>";
  echo $buffer ;
  echo str_pad('', 4096);
  echo "</pre>";
  ob_flush();
  flush();
  sleep(1);
}
pclose($handle);
ob_end_flush();

 ?>

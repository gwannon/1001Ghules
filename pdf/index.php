<?php

date_default_timezone_set("Europe/Madrid");

$filename = __DIR__."/../1001Ghules.pdf";

//Define header information
header('Content-Description: File Transfer');
header('Content-Type: application/pdf');
header("Cache-Control: no-cache, must-revalidate");
header("Expires: 0");
header('Content-Disposition: attachment; filename="'.basename($filename).'"');
header('Content-Length: ' . filesize($filename));
header('Pragma: public');

//Clear system output buffer
flush();

if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
 $ip = $_SERVER['HTTP_CLIENT_IP'];
} 
else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
 $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} 
else {
 $ip = $_SERVER['REMOTE_ADDR'];
}


$json = json_decode(file_get_contents("http://ip-api.com/json/".$ip));

//echo date("Y-m-d H:i:s")."|".$ip."|".$_SERVER['HTTP_USER_AGENT'];

$mensaje = date("Y-m-d H:i:s")."\n".
  $ip."\n".
  $_SERVER['HTTP_REFERER']."\n".
  $_SERVER['HTTP_ORIGIN']."\n".
  (isset($json->status) && $json->status == 'success' ? $json->country."|".$json->city : "")."\n".
  $_SERVER['HTTP_USER_AGENT'];

mail("monclus.jorge@gmail.com", "Nueva descarga 1001 Ghules", $mensaje);

$f=fopen(__DIR__."/log.txt", "a+");
fwrite($f, date("Y-m-d H:i:s")."|".
  $ip."|".
  $_SERVER['HTTP_REFERER']."|".
  $_SERVER['HTTP_ORIGIN']."|".
  (isset($json->status) && $json->status == 'success' ? $json->country."|".$json->city : "")."|".
  $_SERVER['HTTP_USER_AGENT']."\n");
fclose($f);

//Read the size of the file
readfile($filename);


<?php

header("Content-Type: text/plain");

$json1 = json_decode(file_get_contents("https://arrrcthulhu.com/pdf/log.php"));
$json2 = json_decode(file_get_contents("https://1001ghules.gwannon.com/pdf/log.php"));
$json3 = json_decode(file_get_contents("https://bosque.gwannon.com/pdf/log.php"));

echo $json1->total."/".$json2->total."/".$json3->total."\n";
print_r ($json1->descargas[0]);
print_r ($json2->descargas[0]);
print_r ($json3->descargas[0]);


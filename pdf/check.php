<?php
date_default_timezone_set("Europe/Madrid");
header("Content-Type: text/plain");

$jsons['ArrrCthulhu'] = json_decode(file_get_contents("https://arrrcthulhu.com/pdf/log.php"));
$jsons['1001Ghules'] = json_decode(file_get_contents("https://1001ghules.gwannon.com/pdf/log.php"));
$jsons['Bosque'] = json_decode(file_get_contents("https://bosque.gwannon.com/pdf/log.php"));

echo $jsons['ArrrCthulhu']->total."/".$jsons['1001Ghules']->total."/".$jsons['Bosque']->total."\n";
echo "------------------------\n";

$last24hours = [];
foreach($jsons as $label => $json) {
  foreach ($json->descargas as $descarga) {
    if (strtotime($descarga[0]) > strtotime("-24 hours")) {
      /**/
      $descarga[] = $label;
      $last24hours[] = $descarga;
    }
  }
}

array_multisort(array_column($last24hours, 0), SORT_DESC, $last24hours);

foreach($last24hours as $descarga) {
  echo $descarga[7]."\n";
  unset($descarga[7]);
  echo "------------------------\n";
  foreach ($descarga as $item) {
    if ($item != '') echo $item."\n";
  }
  echo "------------------------\n";
}

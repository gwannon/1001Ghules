<?php

preg_match("/<body[^>]*>(.*?)<\/body>/is", file_get_contents('index.html'), $matches);

$html = explode("\n", removeHtmlComments($matches[1]));

$lines = [];
foreach($html as $line) {
  $line = cleanLine($line);
  if(preg_match("/(<h1>|<h2>|<h3>|<h4>|saltopagina)/", $line)) $lines[] = $line;
}

print_r($lines);

function cleanLine($line) {
  $line = str_replace(array("  ", "   ", "\t", "\n", "\r"), "", $line);
  return $line;
}

function removeHtmlComments($content = '') {
  return preg_replace('/<!--(.|\s)*?-->/', '', $content);
}
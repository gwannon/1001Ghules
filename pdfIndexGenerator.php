<?php

//https://packagist.org/packages/paquettg/php-html-parser

// Assuming you installed from Composer:
require "vendor/autoload.php";
use PHPHtmlParser\Dom;

$dom = new Dom;
$dom->loadFromFile('index.html');
$h1s = $dom->find('body > section > .saltopagina, h1, h2, body > .saltopagina');
foreach ($h1s as $h1) {
  echo $h1->getAttribute('tag')." - ".$h1->text."\n";
}
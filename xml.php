<?php
$file = file_get_contents('example.xml');
$xml = new SimpleXMLElement($file);
print_r($xml->to->attributes()->smth->__toString());
//print_r($xml->to->__toString());
//echo $xml->smth;
echo PHP_EOL;
die();

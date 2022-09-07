<?php
require __DIR__ . '/../vendor/autoload.php';

$code = [

];

$code = new \harmonisation\code\Basic();
$code->name = "PHP";
$code->setStructure("ffff")->setCompilation("eeeee");

echo "CODE :NAME  " . $code->name . "<br>";
echo "STRUCTURE " . $code->getStructure() . "<br>";
echo "COMPILATION " . $code->getCompilation() . "<br>";
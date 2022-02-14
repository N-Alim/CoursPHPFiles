<?php

spl_autoload_register(function ($className)
{
    include "./classes/$className.php";
});


$file = new FileHandler(".\\files\\corbeau.txt", "r");

var_dump($file->lecture());

$filename = ".\\files\\corbeau.txt";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);

// var_dump($contents);

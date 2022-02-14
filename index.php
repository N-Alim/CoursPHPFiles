<?php

spl_autoload_register(function ($className)
{
    include "./classes/$className.php";
});

$filename = ".\\files\\corbeau.txt";
$handle = fopen($filename, "rb");

while (!feof($handle))
    echo "Ligne : " . fgets($handle) . "<br />";


fclose($handle);

// var_dump($contents);

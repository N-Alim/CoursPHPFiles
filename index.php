<?php

spl_autoload_register(function ($className)
{
    include "./classes/$className.php";
});

$filename = ".\\files\\corbeau.txt";
$handle = fopen($filename, "rb");

echo "Ligne 1 : " . fgets($handle) . "<br />";
echo "Ligne 2 : " . fgets($handle) . "<br />";


fclose($handle);

// var_dump($contents);

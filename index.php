<?php

spl_autoload_register(function ($className)
{
    include "./classes/$className.php";
});

file_put_contents("./files/toto.txt", "Ecriture dans fichier");
file_put_contents("./files/toto.txt", "Ecriture 2 dans fichier");

// fclose($handle);

// var_dump($contents);

<?php

spl_autoload_register(function ($className)
{
    include "./classes/$className.php";
});

file_put_contents("./files/toto.txt", "Ecriture dans fichier");


$contenu = file_get_contents("./files/toto.txt");
$contenu .= "\nLa suite du fichier";
file_put_contents("./files/toto.txt", $contenu);

// fclose($handle);

// var_dump($contents);

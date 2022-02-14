<?php

spl_autoload_register(function ($className)
{
    include "./classes/$className.php";
});

$fichier = fopen("./files/ecriture.txt", "c+b");

fwrite($fichier, "Une ligne de commentaire bidon\n");
fwrite($fichier, "Une autre ligne");


fclose($fichier);


// fclose($handle);

// var_dump($contents);

<?php

// $fichier1 = file_get_contents("./files/corbeau.txt"); // Un string
$fichier1 = file("./files/corbeau.txt"); // Un tableau

// echo "<pre>";
// var_dump($fichier1);
// echo "</pre>";

$fable = "<blockquote>";

for ($cnt=0; $cnt < count($fichier1); $cnt++) 
{ 
    $fable .= "$fichier1[$cnt] <br />";   
}

$fable .= "</blockquote>";

echo $fable;

echo "<hr />";

echo nl2br(file_get_contents("./files/corbeau.txt"));


<?php

class Log
{
    private static $path = "./logs/erreur.txt";

    public static function write($error)
    {
        $fichier = fopen(self::$path, "c+b");
        
        fwrite($fichier, "$error\n");
        
        fclose($fichier);
    }
}
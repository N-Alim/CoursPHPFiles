<?php

spl_autoload_register(function ($className)
{
    include "./classes/$className.php";
});

Log::write("Test");



// fclose($handle);

// var_dump($contents);

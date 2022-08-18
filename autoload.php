<?php

/**
 * require "Autoload/first.php";
 * require "Autoload/second.php";
 */


 

 spl_autoload_register(function ($class) {
    include 'Autoload/' . $class . '.php';
});

// function __autoload($class){
//     require "Autoload/". $class .".php";
// }


 $test = new first();
 $test1  = new second();


?>
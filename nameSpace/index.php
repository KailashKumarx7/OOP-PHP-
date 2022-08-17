<?php


require 'namespace.php';
require 'testing.php';


function wow(){
    echo "Wow from index file.<br>";
}


use pro\v3\command as cmd;
$obj = new cmd\product();
$obj1 = new cmd\product();

?>
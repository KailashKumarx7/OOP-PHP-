<?php

class base{
    public static $name = "kailash kumar";
     


    // in the same class we use self for accesing the variable
    // public static function show(){
    //     echo self::$name."<br>";
    // }
 

    // public function __construct($n){
    //     self::$name = $n;
    // }

}

class derived extends base{
    public static function show(){
        echo parent::$name."<br>";
    }
}

// echo base::$name;
// base::show();

$test = new derived();
$test->show();

 
?>
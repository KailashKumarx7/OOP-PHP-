<?php

class base{
    protected static $name = "Kailash";
    

    public function show(){
        
        // self is used when we are accesing veriable in the same class
        // echo self::$name;
        // if we need to show the value which is define in the derived class at this thime we use static::$variable name
        echo self::$name. "<br>";
        echo static::$name;

    }
}


class derived extends base{
    protected static $name = "Kumar";
}

$test = new derived();
$test->show();

?>
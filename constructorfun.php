<?php

class person{
    public $name, $age;


    function __construct($name = "No Name ", $age = 0){
        $this->name = $name;
        $this->age = $age;
    }
    function show(){
        echo $this->name ." - ". $this->age . "<br>";
    }
}
$p1 = new person("kailash kumar", 20);
$p2 = new person("Rakesh kumar", 30);
// $p1->name="kailash kumar";
// $p1->age = 20;
$p1->show();
$p2->show();

?>
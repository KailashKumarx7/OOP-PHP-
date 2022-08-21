<?php

class student{

    public $course ="BCA";
    private $first_name;
    private $last_name;

    public function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;

    }
    

    public function __sleep(){
        return array('first_name', 'last_name');
    }
    public function __wakeup(){
        echo "this is unserialize method";
    }
}


$obj = new student();
$obj->setName("Kailash", "Kumar");

$slr = serialize($obj);

$us = unserialize($slr);
print_r($us);


?>
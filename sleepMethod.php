<?php

class student{

    public $course = "BCA";
    private $first_name;
    private $last_name;

    public function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }
/////////////////for serialize any object we use __sleep function
//////////////// and return which variable u want to retun or serialize
    public function __sleep(){
        return array("first_name", "last_name");
    }
}


$obj = new student();
$obj->setName("Kailash", "Kumar");

$srl = serialize($obj);
echo $srl;

?>
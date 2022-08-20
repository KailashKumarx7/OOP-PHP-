<?php

class student{
    

    public $course = "BCA";
    private $first_name;
    private $last_name;

    public function setName($fname, $lname){
        $this->first_name= $fname;
        $this->last_name = $lname;
    }

    public function __unset($property){
        unset($this->$property);
    }
}


$test = new student();
$test->setName("kailsh","Kumar");
unset($test->first_name);

print_r($test);
// unset($test->course);
// echo $test->course;



?>
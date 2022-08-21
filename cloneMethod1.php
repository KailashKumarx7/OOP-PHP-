<?php

class student{
    public $name;
    public $course;

    public function __construct($n){
        $this->name = $n;
    }
    public function setCourse(course $c){
       $this->course = $c; 
    }
    public function __clone(){
        $this->course = clone $this->course;
    }
}

class course{
    public $cname;
    public function __construct($cn){
        $this->cname = $cn;
    }
}

$student1 = new student("Kailash Kumar");
$course1 = new course("BCA");
$student1->setCourse($course1)
//$student2 =  $student1; // copy by reference by default
$student2 = clone $student1; // copy by value
$student2->name = 'Ram Kailash';
$student2->couse->cname = 'C#';


// print_r($student1);
print_r($student1);
print_r($student2);




?>
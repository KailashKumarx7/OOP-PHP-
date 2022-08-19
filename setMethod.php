<?php
class student{
    private $name;

    public function hello(){
        echo $this->name;
    }
    public function __get($property)
    {

        echo "You are trying to access Non existing or private property ($property)\n";
    }

    public function __set($property, $value){//$property is as a parameter or name for $test->course and the value of
                                            // $test->course is as $value
       if(property_exists($this, $property)){// this means function or method name and property is $name 
            $this->$property = $value; // checking name variable is exist in student class or not  or insorting 
       }
       else{
            echo "Property does not exits : $property";
       }
    }

}
 

$test = new student();
// $test->name = "Kailash Kumar";
$test->course = "BCA"; 
$test->hello();



?>
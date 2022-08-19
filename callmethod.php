<?php

//////////////////////// __call() Method /////////////////
class student{
    private $first_name;
    private $last_name;
    private function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function __call($method, $args){

        /////////////////($this for object, $method for method namre)
        if(method_exists($this, $method)){// method_exists it is used when we wanthing search any particular method in a particular class
            call_user_func_array([$this, $method], $args) ;// call back function if we call this function from any where it return in this place call_user_func_array([$this, $method], $args(arguments))      
        }
        else{
            echo "Method Does Not Exist";
        }
        // print_r($args);
    }   
}

$test = new student();
$test->setName("Kailash", "Kumar");

echo "<pre>";

print_r($test); // use of print_r is the showing value of arrays
echo "</pre>";
// $test->personal();


?>
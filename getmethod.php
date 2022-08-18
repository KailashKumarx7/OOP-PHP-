<?php

class abc{
private $data = ["name"=>"Kailash kumar", "course"=>"BCA","Fee"=>"40000"];


public function __get($key){
    // echo "your are trying to access NOn Exizting or private property($property)";

    if(array_key_exists($key, $this->data)){
        return $this->data[$key];
    }
    else{
        return "this key ($key) is not defined.";
    }

}
}

$test = new abc();
// print_r($test->data);
echo $test->course;




?>
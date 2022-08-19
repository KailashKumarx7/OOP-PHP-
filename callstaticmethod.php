<?php

class student{

    private static function hello($name){
    echo "Hello $name";

    }

    public static function __callStatic($method, $args){// __callStatic it is use when the private static mehtod are in the class at this time from out  of the class if we want to call 
      if(method_exists(__class__, $method)){// __class__ if there is no object at this time if we want to access any class we have to use __class__
        call_user_func_array([__class__, $method], $args);
      }
      else{
            echo "Method does not exits: $mehtod";
      }
    }
}
student::hello("Kailash Kumar");

?>
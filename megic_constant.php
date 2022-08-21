<?php

// for printing line number of code or 
// echo "Line Number :". __LINE__ . "";??

// actual location of file 
// echo "The full path of this file is :". __FILE__;

// hwo many folders are before this file
// echo "the absolute path of this file :" . __DIR__;



// function myfunction(){
// echo "The Function name is :" . __FUNCTION__;

// }
// myfunction();


// for showing or printing class name

// class MyClass{

//     public function getClassName(){
//         return __CLASS__;
        
//         }
// }

/// for showing METHOD name 
// class MyClass{

//     public function getClassName(){
//         return __METHOD__;
        
//         }
// }



//////////// for showing namespace/////////
// namespace MyNamespace;
// class MyClass{

//     public function getNamespace(){
//         return __NAMESPACE__;
        
//         }
// }




    trait MyTrait{

        public function getTraitname(){
            return __TRAIT__;
        }
    }
class MyClass{
    use MyTrait;

}
// 






$obj = new MyClass();
echo $obj->getTraitname();

?>
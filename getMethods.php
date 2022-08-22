<?php
////////////// get_class function///////////////
// class myclass{
//     function name(){
//         echo "class name :". get_class($this). "\n";
//     }
// }

// $obj = new myclass();
// $obj->name();
// echo "class Name is :". get_class($obj);


/////////get_parent_class function which is used for checking for parent classes/
// class abc{
   
// }
// class xyz extends abc{
//     function name(){
//         // echo "Parent class name :". get_parent_class($this). "\n";
//     }
// }

// $obj = new xyz();
// $obj->name();
// echo "Parent class is :".get_parent_class($obj). "\n";





//////////// get_class_method ////////////////////
// class myClass{
//    function __construct(){
//     print_r(get_class_methods($this));

//    }

//    function myfunc1(){
// }

// private function myfunc2(){

// }
// }

// $obj = new myClass();
// $class_method = get_class_methods("myClass");
// print_r($class_method);

// // foreach($class_method as $methods){
// //     echo $methods. "\n";
// // }



//////////// for showing class vairables and object variables////////////

// class myClass{

//     public $var1;
//     public $var2= "hello";
//     public $var3= 100;
//     private $var4;


//     /// protected values or private values
//     function __construct(){
//         $this->var1= "kailsh";
//         $this->var2= "kumar";
//         print_r(get_object_vars($this));

//         // print_r(get_class_vars(__class__));
//     }
// }

// $obj = new myClass();
// $class_vars = get_object_vars($obj);
// print_r($class_vars);

////////// get_called_class function/////////////

// class abc{
//     static public function test(){
//         var_dump(get_called_class());
//     }

// }
// class xyz extends abc{

// }

// abc::test();
// xyz::test();

/////// get_decleard_class
// class abc{
   

// }
// class xyz extends abc{

// }

// print_r(get_declared_classes());

/////// get_decleared interfaces//////////
// interface myInterface{
    
// }
// class abc{
   

// }
// class xyz extends abc{

// }

// print_r(get_declared_interfaces());

//////// get_decleard_traits///////////

// trait test{

// }
// trait test1{

// }
// class abc{
//     use test;
   

// }
// class xyz extends abc{

// }

// print_r(get_declared_traits());




/// class alices//////////////
/// for changes classes into shor form of classes
class MyClass{
    public $test;
}

class_alias("MyClass", "mc");

$a = new MyClass();
$b = new mc();

$b->test = "hello";
echo $b->test;





?>
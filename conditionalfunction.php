<?php


/////////////// for checking any class exist in this program or not.../////////////
// class myClasss{

// }

// if(class_exists('myClass')){
//     echo "This class is exist";
// }else{
//     echo "This class is not exist";

// }



////////////////for checking interfaces///////////////////
// interface MyInterfaces{

// }


// if(interface_exists('MyInterface')){
//     echo "This interface is exist";
//     class myClass implement MyInterface{

//     }
// }else{
//     echo "This interface is not exist";

// }


///////////////// for checking methods exist or not in particular class////////
// class myClass{
//     public function MyMethods(){

//     }
        
// }
// $obj = new myClass();


// if(method_exists($obj, 'MyMethod')){
//     echo "This method is exist";
   
// }else{
//     echo "This method is not exist";

// }

////////////////Trait exist or not checking////////////
// trait MyTrait{
//     public function MyMethod(){

//     }
// }

// if(trait_exists('MyTraits')){
//     //echo "This trait is exist";
// class MyCass{
//     use MyTrait;
// }
   
// }else{
//     echo "This trait is not exist";

// }


///////////// for checking any property exist in this class or not we have to check by using  property_exist////

// class MyClass{
//     public $test;
// }


// if(property_exists('MyClass', 'test'))
// {
//     echo "This property is exist";
    
   
// }else{
//     echo "This property is not exist";

// }

///////////for checking any object which class of object is this or not///////

// class MyClass{
//     public $test;
// }

// $obj = new MyClass();


// if(is_a($obj, 'MyClasss'))
// {
//     echo "This this object is of class of MyClass";
    
   
// }else{
//     echo "This this object is not of class of MyClasss";


// }


////////// for checking subclass ////////////

class parentClass{
    public $test;
}
class childClass extends parentClass{

}

$obj = new childClass();


if(is_subclass_of($obj, 'parentClasss'))
{
    echo "This \$obj is a object of subclass of parentClass. ";
    
   
}else{
     echo "This \$obj is not a object of subclass of parentClass. ";



}



?>
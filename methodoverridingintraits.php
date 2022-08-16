<?php
// method overriding in traits

/**if we have one traits 
 * example 
            trait hello{
                public function kate(){
                    echo "She was my crus";
                }
            }

            class AB{
                public function kate(){
                    echo "She is one of my crus";
                }
            }

            class BC extends AB{
                use hello;
                public function kate(){
                    echo "She is my crus";
                }

                we are using both trait and AB class but we have same
                name of function. In this senerio there is a one question 
                which function will be call if we call the object of class BC of function


            }

            $test = new BC();
            $test->hello();
 
 */



trait hello{
    private function sayhello(){
        echo "Hello from hello trait\n";
    }
}
// trait hi{
//     public function sayhello(){
//         echo "Hello from hi trait\n";
//     }
// }

class base{


///// if u want ot use private function in the another class we can use as 
///// as a public like this 
   use hello{
   hello::sayhello as public newhello;
   }
    
    /////if u want to use both  and only one function whose name are say
    /*use hello,hi{
        hello::sayhello insteadof hi; // insteadof hi it mans
        // hi bahek 
        hi::sayhello as newhello;
    }*/



   



    // public function sayhello(){
    //     echo "Hello from base class\n";
    // }
}
// class child extends base{
    
//     use hello;
//     public function sayhello(){
//         echo "Hello from  class\n";
//     }
    
// }



$test = new base();
//  $test1 = new child();
// $test1->sayhello();
$test->newhello();





// echo "<br>";
// $test->newhello();


?>
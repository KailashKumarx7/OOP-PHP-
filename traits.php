<?php

/**if you want to use same function in different class
 at this time we make traits and use this traits in the different classes
 example
        trait <name of trait>{
            public function <function name>(){
                echo "messege";
            }
        }

        class <class name>{
            // for using aboved mentioned trais use have one special
            keyword this is "use <trait name>" 
        }

 */


////////////////////////////////////////// how traits work//////////////
 
trait hello{
    public function sayhello(){
        echo "Hello Nepal";
    }
    public function sayhi(){
        echo "Hi Nepal";
    }
}
trait bye{
    public function saybye(){
        echo "Hello Nepal By By ";
    }
}
 class base{
    use hello, bye;

 }

 class base2{
    use hello;
 }

 $test = new base();
 $test1 = new base2();
 $test->saybye();
 echo "<br>";
 $test->sayhi();
 echo "<br>";
 $test1->sayhello();



?>
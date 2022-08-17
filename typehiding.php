<?php



class school{
    public function getNames(student $names){
        foreach($names->Names() as $name){
            echo $name . "<br>";
        }
    }
}

class student{
    public function Names(){
        return ["ram", "krishna", "gopal", "kailash"];
    }
}


class library{
    

}

function wow(hello $c){  //type declearation for hello function or restrection for only hello classes method and variable we use
    $c->sayhello();
}


$lib = new library();
$stu = new student();
$sch = new school();
$sch->getNames($stu);









/*
function fruits(array $names){
    foreach ($names as $namme){
       echo $namme. "<br>"; 
    }
}

$test = ["Apple","orange", "banana"];
fruits($test);
*/

?>
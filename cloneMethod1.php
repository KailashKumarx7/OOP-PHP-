 <?php
 

// class student{
//     public $name;
//     public $course;

//     public function __construct($n){
//         $this->name = $n;
//     }
//     public function setCourse(course $c){
//        $this->course = $c; 
//     }
//     public function __clone(){
//         $this->course = clone $this->course;
//     }
// }

// class course{
//     public $cname;
//     public function __construct($cn){
//         $this->cname = $cn;
//     }
// }

// $student1 = new student("Kailash Kumar");
// $course1 = new course("BCA");
// $student1->setCourse($course1)
//$student2 =  $student1; // copy by reference by default
// $student2 = clone $student1; // copy by value
// $student2->name = 'Ram Kailash';
// $student2->couse->cname = 'C#';


// // print_r($student1);
// print_r($student1);
// print_r($student2);

class first{
    public $name;
    public $course;

    public function __construct($n){
        $this->name = $n;
    }

    public function setCourse(second $c){
        $this->course = $n;
    }
    public function __clone(){
        $this->course = clone $this->course;
    }

   
}

class second{
    public $cname;

    public function __construct($cn){
        $this->cname = $cn;
    }
}

$student1 = new first("Kailash Kumar");
$course1 = new second("BCA");
$student2 = clone $student1;

$student2->name = "Chakra Dev Bhatta";
$student2->second->cname = "C#";
// echo $student1->name;
// echo $student2->name;
print_r($student1);
print_r($student2);



?> 
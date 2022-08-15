<?php

class employee{
    public $name;
    public $age;
    public $salary;

    function __construct($n, $a, $s){
        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;


    }
    
    
    function info(){
        echo "<h3> Employee Profile</h3>";
    echo "Employee Name :" .$this->name. "<br>";
    echo "Employee age :" .$this->age. "<br>";
    echo "Employee salary :" .$this->salary. "<br>";
    
}
  
}

          class manager extends employee{

            public $ta = 1000;
            public $phone = 300;
            public $totalSalary;

            function info(){
                $this->totalSalary = $this->salary + $this->ta + $this->phone;
                echo "<h3> Managers Profile</h3>";
            echo "Employee Name :" .$this->name. "<br>";
            echo "Employee age :" .$this->age. "<br>";
            echo "Employee salary :" .$this->totalSalary. "<br>";
            
        }
    
    }


$e1 = new employee("Ram", 44, 30000);
$e2 = new manager("Kate", 35, 60000);

$e1->info();
$e2->info();

?>
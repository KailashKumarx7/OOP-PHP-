 <?php
 
 include 'database.php';


 
 $obj = new Database();
 $obj->insert('student', ['student_name'=>'kp suri', 'age'=>'30', 'city'=>'vellor']);
 echo "Insert reslut is: ";
 print_r($obj->getResult());
 
 ?>
 <?php
 
 include 'database.php';


 
 $obj = new Database();
//  $obj->insert('student', ['student_name'=>'kp suri', 'age'=>'30', 'city'=>'vellor']);
//  echo "Insert reslut is: ";
//  print_r($obj->getResult());
 


// $obj->update('student', ['student_name'=>'kp bazeee', 'age'=>'100', 'city'=>'vellor'], 'id="2"');
//  echo "update reslut is: ";
//  print_r($obj->getResult());


$obj->delete('student','id="3"');// table name and condition
//  echo "delete reslut is: ";
//  print_r($obj->getResult());


 
 ?>
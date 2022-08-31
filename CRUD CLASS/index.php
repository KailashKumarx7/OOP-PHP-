 <?php
 
 include 'database.php';


                             
 $obj = new Database();
 $obj->insert('student', ['student_name'=>'Nirik g', 'age'=>'22', 'city'=>'Chahbil']);
 echo "Insert reslut is: ";
 print_r($obj->getResult());
 


// $obj->update('student', ['student_name'=>'kp bazeee', 'age'=>'100', 'city'=>'vellor'], 'id="2"');
//  echo "update reslut is: ";
//  print_r($obj->getResult());


// $obj->delete('student','id="3"');// table name and condition
// if u want to give two condition we have to use AND in between both condition
//  echo "delete reslut is: ";
//  print_r($obj->getResult());




// $obj->sql('SELECT * FROM student');// table name and condition
// //if u want to give two condition we have to use AND in between both condition
//  echo "sql reslut is: ";
//  print_r($obj->getResult());

// $obj->select('student','*',null,null,null,null);// table name and condition
// //if u want to give two condition we have to use AND in between both condition
//   echo "select reslut is: ";
//   print_r($obj->getResult()); 


 
 ?> 
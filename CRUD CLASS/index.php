 <?php
 
 include 'database.php';


 
 $obj = new Database();
 $obj->insert('student', ['id'=>'5', student_name'=>'anubhav suri', 'age'=>'20', 'city'=>'bolawabaad']);
 
 
 ?>
<?php

 $a = 10;
 //$b = $a;  // copy by value
 $b = & $a; // copy by reference or address
 $b = 20;
 echo $a;



?>
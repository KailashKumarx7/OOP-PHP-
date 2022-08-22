<?php
/*
1. connection
procedural 
$conn = mysqli_connect(server name, user name, password, database name);
oop php
$conn = new mysqli(server name, user name, password, database name);


2. Run SQL query
mysqli_query(connection name, SQL Query);
$conn->query(SQL query)

3. close connection
mysqli_close(connection name)
$conn->close()

procedural methods                      oop($result=$conn->query(SQL Query));
1. mysqli_fetch_assoc()                 $result->fetch_assoc();
1. mysqli_fetch_array()                 $result->fetch_array();
1. mysqli_fetch_row()                 $result->fetch_row();
1. mysqli_fetch_all()                 $result->fetch_all();
1. mysqli_fetch_field()                 $result->fetch_field();
mysqli_affected_rows()              $conn-query(SQL Query);
                                    $conn->affected_row();
 
mysqli_connect_error()              $conn->connect_error();
mysqli_connect_errno()              $conn->connect_errno();
mysqli_error()                      $conn->error();
mysqli_error_list()              $conn->error_list();
*/







?>
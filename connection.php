<?php
 
 $server = "mysql027.sql004";
 $username = "meesnlltwxmees2";
 $password = "MeesMBMK2";
 $db = "meesnlltwxmees2";

 //create a connection 
    
    $conn = mysqli_connect($server,$username,$password,$db);

 //check the connection 

 if( !$conn ) {
 	die("connection failed: " . mysqli_connect_error() );
 }

 

?>
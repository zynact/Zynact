<?php
function OpenCon()
 {
 $dbhost = "localhost:3306";
 $dbuser = "zynact_01";
 $dbpass = "zy@TNq8a7r7zDdfr";
 $db = "zynact_db_01";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>
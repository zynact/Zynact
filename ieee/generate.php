<?php
include 'db_connection.php';
$conn = OpenCon();
session_start();
if(isset($_SESSION['name']))
 {
     //do nothing
 }
 else
 {
    header("Location: index.html");
    exit;
 }

 $name=$_SESSION['name'];
 $email=$_SESSION['email'];

	$sql = "SELECT name FROM ieee_pitchathon WHERE email='$email' AND name='$name' LIMIT 1"; 
	$result = mysqli_query($conn, $sql);
	$row = mysqli_num_rows($result);
	if($row >= 1)
	{
		$name = $_SESSION['name'];
		require_once 'template.php';
	} else {
		header('Location: register.php?error=name-not-found');
	}

?>
<?php

session_start();
$dbhost = "localhost";
$username = "root";
$password = "";
$db = "project";
$con = mysqli_connect("$dbhost","$username","$password","$db");



mysqli_select_db($con,$db);
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['email'];

$Age = $_POST['Age'];
$Address = $_POST['Address'];
$Days = $_POST['days'];
$HID = $_POST['HID'];
$Gender = $_POST['gender'];
$Payment = $_POST['payment'];




	$reg = "insert into booking values('$FirstName','$LastName','$Email','$Age','$Address','$Days','$HID','$Gender','$Payment')";
	mysqli_query($con,$reg);
	echo "Registeration Success full";
	header('location:payment.php');


?>
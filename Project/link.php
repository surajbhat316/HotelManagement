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
$Password = $_POST['password'];
$Age = $_POST['Age'];
$Address = $_POST['Address'];
$Gender = $_POST['gender'];

$s = "SELECT * FROM signup where Email='$Email'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1){
	header('location:login.php');
}else{
	$reg = "insert into signup values('$FirstName','$LastName','$Email','$Password','$Age','$Address','$Gender')";
	mysqli_query($con,$reg);
	echo "Registeration Success full";
	header('location:index.html');
}
?>
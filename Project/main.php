<?php

session_start();
$dbhost = "localhost";
$username = "root";
$password = "";
$db = "project";
$con = mysqli_connect("$dbhost","$username","$password","$db");



mysqli_select_db($con,$db);
$Email = $_POST['email'];
$Password = $_POST['password'];

$s = "SELECT * FROM signup where Email='$Email' && Password='$Password'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1){
	header('location:hotel.php');
	
}else{
	header('location:index.html');
}
?>
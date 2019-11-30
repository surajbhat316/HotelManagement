<?php

session_start();
$dbhost = "localhost";
$username = "root";
$password = "";
$db = "project";
$con = mysqli_connect("$dbhost","$username","$password","$db");



mysqli_select_db($con,$db);
$Email = $_POST['email'];
$Rating = $_POST['rating'];
$HID = $_POST['hid'];



	$reg = "insert into rating values('$Email','$HID','$Rating')";
	mysqli_query($con,$reg);
	echo "Thanks For your Feedback";
	


?>
<!DOCTYPE html>
<html>
<head>
	<title>Final</title>
</head>
<body>
	<p align="right"><a href="logout.php">Logout</a>
</body>
</html>
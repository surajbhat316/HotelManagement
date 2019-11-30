<?php
session_start();
$dbhost = "localhost";
$username = "root";
$password = "";
$db = "project";
$con = mysqli_connect("$dbhost","$username","$password","$db");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ratings</title>
</head>
<body>
	<h1>Rate your hotel</h1>

		<form action="final.php" method="post">
			<label for="email"><u>Email</u></label><br><br>
				<input type="email" name="email" placeholder="abc@gmail.com" required><br><br>

				<label for="hid"><u>HID</u></label><br><br>
				<input type="text" name="hid" placeholder="1-2" required><br><br>

				<br><br>

			<label for="rating"><u>Rating</u></label><br><br>
				<input type="radio" name="rating" value="5"> 5
				<input type="radio" name="rating" value="4"> 4
				<input type="radio" name="rating" value="3"> 3
				<input type="radio" name="rating" value="2"> 2
				<input type="radio" name="rating" value="1"> 1
				<br><br>
				<input type = "Submit", name="Submit">
		</form>
</body>
</html>
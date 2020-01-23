<!DOCTYPE html>
<html>
<head>
	<title>output</title>
	<link rel="stylesheet" type="text/css" href="student2.css">
</head>
<body>
	<div>
	<h1>Student Registration</h1>
	<?php 
		echo "Name : ".($_GET["name"])."<br>";
		echo "Roll No : ".($_GET["roll_num"])."<br>";
		echo "Branch : ".($_GET["branch"])."<br>";
	 ?>
	 <br>
	 <a href="http://localhost/Rushi/student1.php">Go back</a>
	</div>
</body>
</html>
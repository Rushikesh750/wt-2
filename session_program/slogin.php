<!DOCTYPE html>
<html>
<head>
	<title>session</title>
</head>
<body>
	<?php 
		session_start();
		$email=$_SESSION['email'];
		$pass=$_SESSION['password'];
		echo "Logged in with".$email." and password".$pass;
	 ?>
</body>
</html>
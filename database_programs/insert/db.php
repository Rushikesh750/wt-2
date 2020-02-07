<?php 
	$a=(int)$_POST["roll"];
	$b=$_POST["name1"];
	$mysqli=new mysqli("localhost","root","","rushikesh");

	if(mysqli_connect_errno())
	{
		echo "Connection failed ".mysqli_connect_errno();
		exit();
	}
	else
	{
		$sql="INSERT INTO be(roll,name) VALUES($a,'$b')";
		$res=mysqli_query($mysqli,$sql);
		if($res==TRUE)
		{
			echo "Record inserted successfully";
		}
		else
		{
			echo "Not inserted...error";
		}
	}
 ?>.

 
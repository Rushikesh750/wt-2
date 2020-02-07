<?php
$a=(int)$_POST["rollno"];
$b=$_POST["name1"];
$mysqli= mysqli_connect("localhost","root"," ","student2");
if(mysqli_connect_errno())
{
	echo "connection failed".mysqli_connect_error();
	exit();
}
else
{
	$sql="INSERT INTO BE(rollno,name) values($a,'$b')";
    $res=mysqli_query($mysqli,$sql);
    if($res==TRUE)
    	echo "Record inverted successfully";
    else
    	echo "Not interested...error";
    }
    
?>

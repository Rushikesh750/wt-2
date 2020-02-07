<?php
$a=(int)$_POST["roll"];
$mysqli = new mysqli("localhost","root","","rushikesh");
if(mysqli_connect_errno())
{
	echo "connection failed".mysqli_connect_error();
	exit();
}
else
{
	$sql="delete from be where roll=$a";
    $res=mysqli_query($mysqli,$sql);
    if($res==TRUE)
    	echo "<h1>Record deleted successfully<h1>";
    else
    	echo "Not deleted...error";
    }
    
?>

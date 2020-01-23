<?php 
	class student
	{
		var $roll=57;
		var $name="Rushikesh";
		var $address="kolhapur";
	}
	$std=new student();
	echo "Student Record";
	echo "<br>Roll no : ".$std->roll;
	echo "<br>Name : ".$std->name;
	echo "<br>Address : ".$std->address;
 ?>
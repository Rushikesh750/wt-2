<?php 
	$a=3.14;
	echo "is ".$a."a double ".is_double($a)."<br>";
	settype($a,'integer');
	echo "is ".$a."is integer ".is_int($a);

	echo "<br>";
	$b=(integer)("10cm" + "20cm");
	echo $b;
 ?>
<?php 
	$count=0;
	function number($text)
	{
		global $count;
		$count++;
		echo "<h1>".$count." . ".$text;
	}
	number("first");
	number("second");
 ?>
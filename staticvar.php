<?php 

	function number($text)
	{
		static $count=0;
		$count++;
		echo "<h1>".$count." . ".$text;
	}
	number("first");
	number("second");
 ?>
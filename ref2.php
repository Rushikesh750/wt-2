<?php 
	function add(&$a)
	{
		$a+=5;
		echo "a = ".$a;
	}
	$original_num=10;
	add($original_num);
	echo "<br> original number = ".$original_num;
 ?>
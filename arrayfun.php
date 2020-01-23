<?php 
	$color=array("red","green","blue","orange");
	echo "<h3>Original array : </h3>";
	foreach($color as $c)
		echo " ".$c;

	echo "<h3>Push : </h3>";
	array_push($color,"black");
	foreach($color as $c)
		echo " ".$c;

	echo "<h3>Pop : </h3>";
	array_pop($color);
	foreach($color as $c)
		echo " ".$c;

	echo "<h3>Unshift : </h3>";
	array_unshift($color,"yellow");
	foreach($color as $c)
		echo " ".$c;

	echo "<h3>Shift : </h3>";
	array_shift($color);
	foreach($color as $c)
		echo " ".$c;

	$c1=array("skyblue","pink");
	echo "<h3>Merge : </h3>";
	$c2=array_merge($color,$c1);
	foreach($c2 as $new)
		echo " ".$new;

	echo "<h3>Keys : </h3>";
	$keys=array_keys($c2);
	foreach($keys as $k)
		echo " ".$k;

	echo "<h3>Values : </h3>";
	$values=array_values($c2);
	foreach($values as $v)
		echo " ".$v;

	echo "<h3>Shuffle : </h3>";
	shuffle($c2);
	foreach($c2 as $new)
		echo " ".$new;

	echo "<h3>Reverse : </h3>";
	$c3=array_reverse($c2);
	foreach($c3 as $new)
		echo " ".$new;

	echo "<h3>Count : </h3>";
	echo count($c3);
	
 ?>
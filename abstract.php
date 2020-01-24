<?php 
	abstract class test
	{
		abstract function abfun();
	}
	class test1 extends test
	{
		function abfun()
		{
			echo "Have a nice day";
		}
	}
	$obj=new test1();
	$obj->abfun();
 ?>
<?php 
	class test
	{
		var $name="Rushikesh";
		function setname($name1)
		{
			$this->name=$name1;
		}
		function display()
		{
			echo "Hello ".$this->name;
		}
	}
	$obj=new test();
	$obj->setname("Shreyas");
	$obj->display();
 ?>
<?php 
	interface myInterface
	{
		public function getName();
	}
	interface myInterface1 extends myInterface
	{
		public function getAge();
	}
	class myclass implements myInterface1
	{
		public function getName()
		{
			echo "My name is Rushikesh";
		}
		public function getAge()
		{
			echo "<br>My age is 20";
		}
	}
	$obj=new myclass();
	$obj->getName();
	$obj->getAge();
 ?>
<?php 
	class test
	{
		public $name="Rushikesh";
		public function test($name1)
		{
			$this->name=$name1;
		}
		public function display()
		{
			echo "Hello ".$this->name;
		}
	}
	class test1 extends test
	{
		public function display()
		{
			echo "welcome";
		}
	}
	$obj=new test1("Shreyas");
	$obj->display();
 ?>
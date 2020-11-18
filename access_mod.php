<?php
abstract class Demo
{
	public $name;
	protected $age;
	public $salary;
	abstract function a();
	function show()
	{
		echo $this->name;
		echo $this->age;
		echo $this->salary;
	}
	/*final function hello()
	{
		echo "this is fianl method";
	}*/

	function b()
	{
		echo "hello dear";
	}

}
class Demo1 extends Demo
{
	public function a()
	{
		echo "this is defination of abstarct class";
	}
	function show1()
	{
		echo $this->name;
		echo $this->age;
		echo $this->salary;
	}
	/*function hello()
	{
		echo "this is clid view";
	}*/
}
$obj=new Demo1();
$obj->show1();
//	$obj->hello();
$obj->a();
$obj->b();
?>
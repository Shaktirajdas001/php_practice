<?php
class Demo
{
	var $name;
	var $age;
	function info($name,$age)

	{
		echo $this->name=$name;
		echo $this->age=$age;

	}
	public function add($a)
	{
		$add=$a+$a;
		echo $add."<br>";
	}
}
class Demo1 extends Demo
{
	var $salary;
	var $phone;
	function emp($x,$y,$z,$w)
	{
		parent::info($x,$y);
		echo "<br>";
		echo "$this->salary=$z"."<br>";
		echo "$this->phone=$w"."<br>";

	}
	/*public function add($a,$b)
	{
		$add=$a*$b;
		echo $add;
	}*/

}
$obj=new Demo1();
//$obj->add(20,30);
$obj->add(12);

$obj->emp('shakti','12','10000','6666');
?>
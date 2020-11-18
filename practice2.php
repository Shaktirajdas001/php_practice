<?php
class Demo
{
	var $name;
	var $phone;
	var $email;
	function empinfo()
	{
		$this->name;
		$this->phone;
		$this->email;
	}


}
class Demo1 extends Demo
{
	var $emp_name;
	var $emp_sal;
	var $emap_age;
	function empdetail()
	{
		parent::empinfo();
		$this->emp_name;
		$this->emp_sal;
		$this->emp_age;
	}
}
$obj=new Demo();
$obj1=new Demo1();
echo $obj1->name="shakti"."<br>";
echo $obj1->phone="9937546976"."<br>";
echo $obj1->email="dnfdhf@njnbd.com"."<br>";
echo $obj1->emp_name="ej dnenjw "."<br>";
echo $obj1->emp_sal="1212331"."<br>";
echo $obj1->emp_age="22"."<br>";
?>
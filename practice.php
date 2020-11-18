<?php
class Demo
{
	function add()
	{
		$x=20;
		$y=22;
		$add=$x+$y;
		echo $add;
	}
	
}
class Demo1 extends Demo
{
function sub()
	{
		$x=140;
		$y=23;
		$sub=$x-$y;
		echo $sub;
	}
}
class Demo2 extends Demo1
{
	function mul()
	{
		$x=22;
		$y=11;
		$mul=$x*$y;
		echo $mul;
	}
}
class Show extends Demo2
{
	function __construct()
	{
		parent::add();
		parent::sub();
		parent::mul();


	}
}
$obj=new Show();


?>


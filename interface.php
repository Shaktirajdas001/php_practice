<?php
interface A
{
	 function a();
}
interface B
{
	 function b();
}
class C implements A,B
{
	function a()
	{
		echo "hello a";
	}
	function b()
	{
		echo "hello b";
	}
}
$obj=new C();
$obj->a();
$obj->b();
?>
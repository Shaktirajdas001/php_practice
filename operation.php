<!DOCTYPE html>
<html>
<body>



<?php
class CT
{
	public function add($a,$b)
	{
		$res=$a+$b;
		echo "$res";
	} 
	public function message()
	{
		echo "hello message";
	}
}
class Seqoua extends CT
{
	/*public function add($a,$b)
	{
		$res= $a*$b;
		echo "$res";

	}*/
	public function demo()
	{
		echo "hello child";

	}
}
$obj=new Seqoua();
$obj->add(10,20);
$obj->message();
//$ct=new CT();
//$ct->add(23,22);
?>
</body>
</html>
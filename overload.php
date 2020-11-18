<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
class CT
{
	public function add($a,$b,$c)
	{
		$res=$a+$b+$c;
		echo "$res";
	}
	public function add($a,$b)
	{
		$res=$a+$b;
		echo "$res";
	}
}
$obj=new CT()
$obj->add(3,4);
?>
</body>
</html>
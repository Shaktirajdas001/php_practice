<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<?php
class Fruit
{
public $name;
public $color;

function __construct($name,$color)
{
	$this->name=$name;
	$this->color=$color;
}
function output()
{
	echo "the name is {$this->name} the color is {$this->color}."; 
}

}
class Apple extends Fruit
{
	function message()
	{
		echo "chosse the fruit";
	}
}
$obj=new Apple("banana","yelloow");
$obj->output();
$obj->message();
?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<?php
class Fruit
{
	public $name;
	public 	$color;
	function __construct($name)
	{
		$this->name=$name;
	}
	function get_name()
	{
		return $this->name;
	}
	
}
$apple = new Fruit("apple");
	echo $apple->get_name();
?>
</body>
</html>
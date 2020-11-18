<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<?php
class Fruit
{
	public $name;
	function __construct($name)
	{
		$this->name=$name;
	}
	function __destruct()
	{
	echo "this food .{$this->name}.";
}
}
$apple=new Fruit('Apple');

?>
</body>
</html>
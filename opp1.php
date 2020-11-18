<!DOCTYPE html>
<html>

<body>


<?php
class Fruit
{
	public $name;
	public $color;
	function set_name($name)
	{
		$this->name=$name;

	}
	function get_name()
	{
		return $this->name;
	}
	function set_color($color)
	{
		$this->color=$color;
	}
	function get_color()
	{
		return $this->color;
	}

}
$apple= new Fruit();
$angur=new Fruit();
$apple->set_color('red');
$apple->set_name('apple');
$angur->set_name('angur');
echo "Name:" .$apple->get_name();
echo "<br>";
echo "Color:" .$apple->get_color();
echo "<br>";
echo $angur->get_name();
var_dump($apple instanceof Fruit);
?>
</body>
</html>
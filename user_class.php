<?php
class User
{
	//public $name;
	//public $age;
	var $a;
	var $b;
	/*public function __construct($name,$age)
	{
		$this->name=$name;
		$this->age=$age;
		echo $name;
		echo $age;
		echo "<br>";

	}*/
	public function add($a,$b)
	{
	$res=$a+$b;
	echo $res;
}
public function show()
{
	echo "hello motto";
}
}
//$user=new User('shakti',38472408);
//$obj=new User();
$user=new User();
$user->add(2,3);
echo "<br>";
$user->add(33,77);
echo "<br>";
$obj= new User();
$obj->add(22,33);
echo "<br>";
$obj->show();

?>
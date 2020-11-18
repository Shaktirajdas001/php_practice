<?php
error_reporting(E_ALL);
class User
{
	public $server="localhost";
	public $user="root";
	public $password="";
	public $db="task";
	public $conn;
	public function __construct()
	{
		try
		{
			$this->conn=new mysqli($this->server,$this->user,$this->password,$this->db);
		}
		catch(Exception $e)
		{
			echo "connection failed".$e->getMessage();
		}

	}
	public function insert($data)
	{
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$name=$data['name'];
		$userid=$data['userid'];
		$phone=$data['mobile'];
		$email=$data['email'];
		$insert = "INSERT INTO user (name,userid,phone,email) VALUES ('$name','$userid','$phone','$email')";
		var_dump($insert);
		if($sql=$this->conn->query($insert))
			{
				echo "<script>alert('record aded sucessful')</script>";
			}
			else
			{
				echo "<script>alert('unsuccesfully added')</script>";
			}
	}
}

}
?>
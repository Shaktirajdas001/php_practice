<?php
class Result extends Post
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
	catch(Exceptio $e)
	{
		echo "connection failed".$e->getMessage();
	}
	}
public function search()
{
	$data=null;
	$query="select post.titel,post.post,user.name,user.phone,user.email on post from post inner join user on post.userid=user.userid ";
	if($sql=$this->conn->query($query))
	{
		while($row=mysqli_fetch_assoc($sql))
		{
			$data[]=$row;
		}
		
	}
	return $data;
}

}
?>
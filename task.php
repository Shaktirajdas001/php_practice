<?php
error_reporting(E_ALL);
class Post
{
	public $server="localhost";
	public $user="root";
	public $password="";
	public $database="task";
	public $conn;
	function __construct(){
		try{

			$this->conn=new mysqli($this->server,$this->user,$this->password,$this->database);

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
			$userid=$_POST['userid'];
			$post=$_POST['post'];
			$titel=$_POST['titel'];
			$insert = "INSERT INTO post (userid,post,titel) VALUES ('$userid','$post','$titel')";
			var_dump($insert);
			if($sql = $this->conn->query($insert))
			{
				print_r($sql);
				echo "<script>alert('record aded sucessful')</script>";
			}
			else
			{
				echo "<script>alert('unsuccesfully added')</script>";
			}
		}

	}
	public function search()
	{
			$data = null;

			$query = "SELECT * FROM post";
			if ($sql = $this->conn->query($query)) {
				while ($row = mysqli_fetch_assoc($sql)) {
					$data[] = $row;
				}
			}
			return $data;
		}
}
?>











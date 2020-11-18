<?php
error_reporting(E_ALL);
class Model
{
	public $server="localhost";
	public $user="root";
	public $password="";
	public $database="fit";
	public $conn;
	function __construct()
	{
	try
	{
		$this->conn=new mysqli($this->server,$this->user,$this->password,$this->database);
	}
	catch (Exception $e)
	{
		echo "connection failed".$e->getMessage();
	}
}
public function insert($data)
{
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		//if(isset($_POST['event']) && isset($_POST['image']) && isset($_POST['fromdate']) && isset($_POST['todate']) && isset($_POST['school']) && isset($_POST['eventname']) && isset($_POST['student']) && isset($_POST['contact']))
			//exit();
		//{
			//if(!empty($_POST['event']) && !empty($_POST['image']) && !empty($_POST['fromdate']) && !empty($_POST['todate']) && !empty($_POST['school']) && !empty($_POST['eventname']) && !empty($_POST['student']) && !empty($_POST['contact']))
			//{
    
	$event=$_POST['event'];
	$filename=$_FILES['image']['name'];
	$fromdate=$_POST['fromdate'];
	$todate=$_POST['todate'];
	$school=$_POST['school'];
	$eventname=$_POST['eventname'];
	$student=$_POST['student'];
	$contact=$_POST['contact'];
	if(!empty($filename))
	{
      move_uploaded_file($_FILES['image']['tmp_name'],'C:\xampp\htdocs\oops\Image'.$filename);
      var_dump($filename);
    }

		$insert = "INSERT INTO user (event,image,fromdate,todate,school,eventname,student,contact) VALUES ('$event',
		'$filename','$fromdate','$todate','$school','$eventname','$student','$contact')";
		print_r($sql);
		var_dump($insert);
		if ($sql = $this->conn->query($insert)) 
		{
			print_r($sql);
			echo "<script>alert('records added successfully');</script>";
			echo "<script>window.location.href = 'success.php';</script>";
		}
		else
		{
		echo "<script>alert('failed');</script>";
		echo "error".mysqli_connect_error();
		}
	}
	else
	{		
	echo "failed to connect".mysqli_connect_error();

	}
}
}
?>
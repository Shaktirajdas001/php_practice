<?php
include('db.php');
if(isset($_POST['submit']))
{
	$event=$_POST['event'];
	$file=$_FILES['image'];
	//
	//exit();
	$fromdate=$_POST['fromdate'];
	$todate=$_POST['todate'];
	$school=$_POST['school'];
	$eventname=$_POST['eventname'];
	$student=$_POST['student'];
	$contact=$_POST['contact'];

	$filename=$file['name'];
	$filepath=$file['tmp_name'];
	$fileerror=$file['error'];
	if($fileerror ==0)
	{
		$destfile='image/'.$filename;
		move_uploaded_file($filename, $destfile);
		$insert = "INSERT INTO fitregister (event,image,fromdate,todate,school,eventname,student,contact) VALUES ('$event',
		'$destfile','$fromdate','$todate','$school','$eventname','$student','$contact')";

		if(mysqli_query($con,$insert))
		{
			echo "welcome to fit india";
		}
		else

		{
			
			echo "not succesfull" .mysqli_error($con);
		}
	}
}
else
{
	echo "no button clicked";
}
?>
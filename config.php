<?php
$host="localhost";
$user="root";
$password="";
$database="fit";
$con=mysqli_connect($host,$user,$password,$database);
if(!$con)
{
	die("connection failed ".mysqli_connect_error());
}
?>
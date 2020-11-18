<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include 'task.php';
$post=new Post();
$insert=$post->insert($_POST);
?>
<form action="" method="post" >
	userid:<input type="text" name="userid">
	<br>
	Post:
	<input type="text" name="post">
	
	<br>
	
	titel:<input type="text" name="titel">
	<br>
	<input type="submit" name="submit" value="register">
</form>
</body>
</html>
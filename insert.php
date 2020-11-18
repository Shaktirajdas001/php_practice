<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	error_reporting(E_ALL);
	include 'user.php';
	$user=new User();
	$insert=$user->insert($_POST);
	?>
<form method="post" action="">
	Name:
	<input type="text" name="name">
	<br>
	userid:
	<input type="text" name="userid">
	<br>
	Mobile:
	<input type="text" name="mobile">
	<br>
	Email:
	<input type="text" name="email">
	<br>
	<input type="submit" name="submit" value="add">
</form>
</body>
</html>
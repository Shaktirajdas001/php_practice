<?php
$con=mysqli_connect('localhost', 'root', '') or die('Could not connect the database : Username or password incorrect');
mysqli_select_db($con,'fit') or die ('No database found');
//echo 'Database Connected successfully';
?>
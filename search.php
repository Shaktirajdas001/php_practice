<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" align="center">
		<tr>
			<th>id</th>
			<th>userid</th>
			<th>post</th>
			<th>titel</th>
		</tr>
		
	
	<?php
	include 'task.php';
	$res=new Post();
	$search=$res->search();
	$i=1;
	if(!empty($res))
	{
     foreach($res as $row)
     { 
    ?>
	<tr>
	<td><?php echo $i++; ?></td>
	<td><?php echo $row['userid']; ?></td>
    <td><?php echo $row['post']; ?></td>
    <td><?php echo $row['titel']; ?></td>
    
</tr>
  <?php
     }
 }
     else
     {
     	echo "no data";
     }

?>
</table>

</body>
</html>
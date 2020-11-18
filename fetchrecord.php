<?php
class Database
{
	public function display($tableN)
	{
		$conn=$this->connect();
		echo "<table border='1'>";
		echo "<tr><th>name</th><th>paasword</th></tr>";
		$query=myqli_query($conn,"select * from $tableN");
		while($row=mysqli_fetch_assoc($query))
		{
			echo "<td>".$row['username']."</td>";
			echo "<td>".$row['password']."</td>";

		}
		echo "</table>";
	}
}
?>
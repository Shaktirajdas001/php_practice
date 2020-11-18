<?php
class Database
{
	var $host="localhost";
	var $user="root";
	var $password="";
	var $database="resturant";

	public function connect()
	{
		$con=mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $con;
	}
	public function saveRecords($tableN,$u,$p)
	{
		$conn=$this->connect();
		mysqli_query($conn,"insert into $tableN values('','".$u."','".$p."')");
	}
}
$obj=new Database();
extract($_POST);
if(isset($save))
{
	$obj->saveRecords("user","username","pass");
	echo "record saved";
}

?>
<form method="post">
<table width="457" border="2" cellspacing="5" cellpadding="5">
  <tr>
    <th width="333" scope="row">Enter your user id </th>
    <td width="81"><input type="text" name="username"/></td>
  </tr>
  <tr>
    <th scope="row">enter your password </th>
    <td><input type="text" name="pass"/></td>
  </tr>
  
  <tr>
    <th colspan="2" scope="row">
	<input type="submit" value="save" name="save"/>
	</th>
    </tr>
</table>

</form>
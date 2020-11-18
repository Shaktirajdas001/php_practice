<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$_SESSION["user"]="shakti";
$_SESSION["color"]="black";
echo "session is set";
?>
</body>
</html>
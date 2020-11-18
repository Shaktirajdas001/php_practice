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
echo "the session name is".$_SESSION['user']."<br>";
echo "the session color is".$_SESSION['color']."<br>";
print_r($_SESSION);
session_unset();
session_destroy();
?>
</body>
</html>
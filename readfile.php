<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$myfile=fopen("abc.txt","w") or die("can n ot open the file");
$txt="hello";
fwrite($myfile, $txt);
?>
</body>
</html>
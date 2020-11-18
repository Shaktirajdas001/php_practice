<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
$int=5;
$comment="<h1>hello how are you today </h1>";
$sanitize=filter_var($int,FILTER_SANITIZE_INT);
echo "$sanitize";
?>
</body>
</html>
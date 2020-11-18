<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() - (86400 * 30), "/");
?>
<html>
<body>

<?php
if(count($_COOKEI)> 0)
{
	echo "cookeis are enabled";
}
else
{
	echo"cookei is disabled";
}
?>

<p><strong>Note:</strong> You might have to reload the page to see the new value of the cookie.</p>

</body>
</html>
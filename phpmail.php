<?php
$to="shaktirajdas@gmail.com";
$subject="hello";
$message="hey i am okay here how are you dude?";
$from="dasshaktiraj@gmail.com";
if(mail($to, $subject, $message))
{
	echo "mail sent succesful";
}
else
{
	echo"failed";
}
?>
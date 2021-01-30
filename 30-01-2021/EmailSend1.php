<?php

$to = 'sumitrajput000444@gmail.com';
$subject = 'simple email';
$body = 'This is my mail ."\n\n". i wish you got my mail';
$headers = 'From: <vasitaratan123@gmail.com>';

//if you check its work or not to use if condition to check mail sent or not
if(mail($to, $subject, $body,$headers))
{
	echo "mail has been sent".$to;
}
else
{
	echo "mail hasn't sent something wents wrong!!";
}


?>
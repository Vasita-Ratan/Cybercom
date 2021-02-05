<?php

require 'Core.php';
require 'server.php';

if (loggedin())
{
	$firstname = getuserField('fistname');
	$suname = getallheaders('suname');
	echo 'logged in.'.$firstname.'  '.$suname.' <a href = "logout.php">logout</a><br>';
	getuserField('$fistname');

}
else
{
	include 'Loginform.php';

}

?>
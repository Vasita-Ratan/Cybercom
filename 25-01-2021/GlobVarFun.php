<?php

$user_ip = $_SERVER['REMOTE_ADDR'];

//echo $user = 'Your ip address is '.$user_ip;

function echo_ip()
{
	global $user_ip;//get the value of variable from outside the function static and dynamic variable also be create
 $user = 'Your ip address is '.$user_ip;//can't show in browser ip address
 echo $user;
}
echo_ip();
?>

<?php

require 'SELECT1.php';

$user_ip = $_SERVER['REMOTE_ADDR'];

//echo $user_ip;//return localhost address

//this fun check ip exists or not
 function ip_exists($ip)
 {
 	global $user_ip;
 	echo $user_ip;
 }

//this fun increment counter by 1 to show many ips
 function update_Count()
 {

 }

 ip_exists(1);

?>
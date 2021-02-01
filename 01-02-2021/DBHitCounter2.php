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
 	//create table in database like hit count this query can call in this fun

 	$query = "SELECT `count` FROM `hit_Count`";
 	if(@$quer_run = mysql_query($query))
 	{
 		$count = mysql_result($quer_run, 0,'count');
 		//echo  $count;

 		$count_inc = $count + 1;
		//hit_Count is table name and feild is count value auto increment by 1 		
 		$query_update = "UPDATE `hit_Count` SET `count` = '$count_inc'";
 		//$quer_update_run = mysql_query($query_update);//this fun process the query

 		//if query is update to check out by if condition

 		if(@$quer_update_run = mysql_query($query_update)
 		{
 			echo "query is sucessfull updated"; 

 		}

 	} 
 	else
 	{
 		die(mysql_error());
 	}
 }

 update_Count();

?>
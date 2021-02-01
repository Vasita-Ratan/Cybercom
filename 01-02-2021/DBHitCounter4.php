<?php

require 'SELECT1.php';

$user_ip = $_SERVER['REMOTE_ADDR'];

//echo $user_ip;//return localhost address

//this fun check ip exists or not



 function ip_exists($ip)
 {
 	global $user_ip;
 	//echo $user_ip;

 	//this means selected ip is exists in database 
 	$query = "SELECT `ip` FROM `hit_Count` WHERE `ip` = '$user_ip'";
 	@$query_run = mysql_query($query);
 	$query_num_rows =  mysql_num_rows($query_run); 
 	if($query_num_rows == 0)
 	{
 		return false;//ip add not exists in database
 	}
 	else  if($query_num_rows>=1)
 	{
 		return true;//p add exists in database
 	}
 }

 //add ip address in database 

function add_ip($ip)
{
	//hits_ip is new table name
	$query = "INSERT INTO `hits_ip` values('$ip')";

	@$query_run = mysql_query($query);
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
 		$quer_update_run = mysql_query($query_update);//this fun process the query
 	} 
 	add_ip($user_ip);//call this fun here
 	
 }
/*
 	if(ip_exists($user_ip))
 	{
 		echo "yes its exists";
 	}
 	else
 	{
 		echo "not exists";
 	}*/
 	if(!ip_exists($user_ip))//if ip not exists to incr counter by 1
 	{
 		update_Count();
 		add_ip($user_ip);

 	}
 	else
 	{
 		echo "no
?>
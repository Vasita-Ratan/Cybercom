<?php

$mysql_error = 'could not connect';
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'training';

$conn = @mysqli_connect($mysql_host,$mysql_user,$mysql_pass) or die($mysql_error); 
/*
if($conn == true)
{
	echo "connected";
}
else
{
	echo "not connected";	
}

*/

?>
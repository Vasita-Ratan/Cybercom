<?php

$mysql_error = 'could not connect';
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'training';

if(!@mysqli_connect($mysql_host,$mysql_user,$mysql_pass) || !@mysqli_select_db($mysql_db))


	 die($mysql_error()); 



?>





<?php


require 'SELECT1.php';

//perform some query on database table 

$query = "select `id`,`name` from `employee` ORDER BY `id` " ;//if you set ascending or desending order to use DESC or ASC 

//execute this query to use mysql_query function
$query_Run = mysql_query($query);

//otherwise if threw check it query execute or not

if($query_Run = mysql_query($query))
{
	echo "query executed";

	//when execute query to fetch all rows to use while loop

	while ($row = mysql_fetch_assoc($query_Run)) { //create associative array to store value in $row array varibale
		
		//this variable check with database table variable
		$id = $row['id'];
		$name = $row['name'];

		echo $id."id is for".$name.'<br>';
	}
}
else
{
	echo "please check have some error";
	//otherwise when query not execute to use 
	//echo mysql_error();//return just error
}

?>
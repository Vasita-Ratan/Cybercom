<?php


require 'SELECT1.php';

//perform some query on database table 

//take a condition like employee name is ratan and this will showing in descending order

$query = "select `id`,`name` from `employee` where `name` = 'Ratan' ORDER BY `id` DESC" ;//if you set ascending or desending order to use DESC or ASC 

//execute this query to use mysql_query function
$query_Run = mysql_query($query);

//otherwise if threw check it query execute or not

if($query_Run = mysql_query($query))
{
	echo "query executed";

	//if have any filed is blank or not to check it

	if(mysql_num_rows($query_Run)==NULL)//IF ROW WILL BE NULL RETURN NOT FOUND 
	{
		echo "not Result found";
	}
	else
	{

		//when execute query to fetch all rows to use while loop
 
		while ($row = mysql_fetch_assoc($query_Run)) { //create associative array to store value in $row array varibale
		
			//this variable check with database table variable
			$id = $row['id'];
			$name = $row['name'];
			$designation = $row['designation']

			echo $id."id is for".$name."those designation is:- ".$designation.'<br>';
		}
	}


}
else
{
	echo "please check have some error";
	//otherwise when query not execute to use 
	//echo mysql_error();//return just error
}

?>
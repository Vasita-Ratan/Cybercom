<?php

$mysql_error = 'could not connect';
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'employee';
//steps:-
//1)connection establish
//@mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die($mysql_error); //@ symbol take away defaulte error reporting 

//echo "connected!!";

//2) selecting database

//mysql_select_db($mysql_db) or die($mysql_error) ;

//if condition in check its working or not

if(!@mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !@ mysql_select_db($mysql_db))
{
	echo die($mysql_error);
}
else
{
	echo "connected."; 

}

?>
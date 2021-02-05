<?php


$host = 'localhost';
$user_name = 'root';
$password = '';
$db = 'training';


/**
 * 
 */
class ServerException extends Exception {}
class DatabaseException extends Exception{}

try
{
	if(!@mysqli_connect($host,$user_name,$password))
	{
		throw new ServerException("could not connect to server");
		
	}
	else if(!@mysqli_select_db($db))
	{
		throw new DatabaseException("Error connection database");
		
	}
	else{
		echo "connected";
	}
}
catch(ServerException $ex)
{
	echo 'Error:'.$ex->getMessage();
}
catch(DatabaseException $ex)
{
	echo 'Error:'.$ex->getMessage();
}


?>
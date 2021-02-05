<?php


$host = 'localhost';
$user_name = 'root';
$password = '';
$db = 'training';


/**
 * 
 */
class ServerException extends Exception {

	public function showspecific()
	{
		return "Error on line".$this->getLine()."in ".$this->getFile();//error throw on this line
	}

}
class DatabaseException extends Exception{

	public function showspecific()
	{
		return "Error on line".$this->getLine()."in ".$this->getFile();//error throw on this line
	}


}

try
{
	if(!@mysqli_connect($host,$user_name,$password))
	{
		throw new ServerException("could not connect to server");
		
	}
	else if(!@mysql_select_db($db))
	{
		throw new DatabaseException("Error connection database");
		
	}
	else{
		echo "connected";
	}
}
catch(ServerException $ex)
{
	echo $ex->showspecific();
}
catch(DatabaseException $ex)
{
	echo $ex->showspecific();
}


?>
<?php




class Database
{
	
	public function __construct($db_host,$db_username,$db_password)
	{
		if(!@$this->connect($db_host,$db_username,$db_password))
		{
			echo "connection failed";
		}
		else if(@$this->connect($db_host,$db_username,$db_password))
		{
			echo "connecting to database:- ".$db_host;
		}

	}
	public function connect($db_host,$db_username,$db_password)
	{
		if(!mysqli_connect($db_host,$db_username,$db_password))
		{
			return false;	
		}
		else
		{
			return true;
		}
		
	}
}

$ans = new Database('localhost','root','');

?>
<?php
ob_start();
session_start();
$currentFile = $_SERVER['SCRIPT_FILE'];

if(isset($_SESSION['HTTP_REFERER']) && isset($_SERVER['SCRIPT_FILE']) && !empty($_SESSION['HTTP_REFERER']) && !empty($_SERVER['SCRIPT_FILE']))
{
		$http_referer = $_SESSION['HTTP_REFERER'];
}
else
{
	echo "not set";
}
function loggedin()
{
		if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
				return true;

		}
		else
		{
			return false;
		}


}
function getuserField($field)
{
		$query =  "select '$field' from `users` where `id = '".$_SESSION['user_id']."'";
		if($query_run = mysql_query($query))
		{
			if($query_row = mysql_result($query_run, 0, $field))
			{

				return $query_row;

			}


		}
}

?>
<?php

	session_start();
	//echo $_SESSION['name'];//its maintain the session for privious file value 
	echo "yes you are loggedin ".$_SESSION['name']."password is ".$_SESSION['password'];
	/*if(isset($_SESSION['name']) && isset($_SESSION['password']))//if username is correct to login
	{
		echo "yes you are loggedin ".$_SESSION['name']."password is ".$_SESSION['password'];
	}
	else
	{
		echo "please Login !";
	}

	

	if(isset($_SESSION['name']) && isset($_SESSION['age']))//if username is correct to login
	{
		echo "yes you are loggedin ".$_SESSION['name'].'age is '.$_SESSION['age'];
	}
	else
	{
		echo "please Login !";
	}*/
?>
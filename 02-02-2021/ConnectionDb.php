<?php
$server_name="localhost";
$username="root";
$password="";
$db="training";
$mysql_error="not connect";

$con= mysqli_connect($server_name,$username,$password,$db) or die($mysql_error);

if($con)
{
	echo "connected";
}
if(!mysqli_select_db($con,'training'))
{
	echo "not selected Database";	
}
$name = $_POST['name'];

$query = "INSERT INTO name(name) VALUES('$name')";

if(! mysqli_query($con,$query))
{
	echo "Record not inserted";
}
else
{
	echo "Record inserted";
}	 
	
header("refresh: 10; url=insert.html");	
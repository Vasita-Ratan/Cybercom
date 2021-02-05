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
else
{
	echo "not connected"; 

}
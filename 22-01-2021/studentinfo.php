<?php
$servername="localhost";
$username="root";
$password="";
$database_name="phpmyadmin";

$conn=mysql_connect($servername,$username,$password,$database_name);
if (!$conn) 
{
	die("connection Failed:" . mysqli_connect_error());
	# code...
}
if(isset($_POST['save']))
{
	$s_id = $_POST[s_id];
	$s_name = $_POST[s_name];
	$s_rollno = $_POST[s_rollno];

	$sql_query = "INSERT INTO student (s_id,s_name,s_rollno) VALUES ('$s_id',$s_name','$s_rollno')";

	if(mysqli_query($conn,$sql_query))
	{
		echo "record inserted !";
	}
	else
	{
		echo "Error:-" . $sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);

}
?>
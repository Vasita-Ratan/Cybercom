<?php


//SELECT	`id` FROM `users` WHERE `username` = 'Ratan' AND `password` = 'Ratan@123';
//SELECT	`id` FROM `users` WHERE `username` = '' OR  ' '='' AND `password` = ' '  OR ' '=' ';//GET THE ID



$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'training'); 

if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(!empty($username) && !empty($password))
	{
		$query = "SELECT * FROM `users` WHERE `username` = '".$username."' AND `password` = '".$password."'";
		$query_run = mysqli_query($con,$query);
		if(mysqli_num_rows($query_run)==1)
		{
			echo "ok";
		}
		else
		{
			echo "not fetch";
		}
	}
	else
	{
			$insertq = "INSERT INTO `users` VALUES('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password)."')";
		$query_run = mysqli_query($con,$insertq);
	}
}
/*
	$password_hash = md5($password);
	if(!empty($username) && !empty($password))
	{
		$query =  "select * from users where `username` = '".mysql_real_escape_string($username)."' and `password` = '".mysql_real_escape_string($password_hash)."' ";//this fun securing from sql injection 

*/
?>

<form action="SqlInjection1.php" method="POST">

	Username:-<input type="text" name="username"><br>
	password:-<input type="password" name="password"><br>
	<input type="submit" name="submit" value="submit">
</form>
<?php

if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$password_hash = md5($password);
	if(!empty($username) && !empty($password))
	{
		$query =  "select * from users where `username` = '".mysql_real_escape_string($username)."' and `password` = '".mysql_real_escape_string($password_hash)."' ";//this fun securing from sql injection 

		if($query_run = mysql_query($query))
		{
				$query_rows = mysql_num_rows($query_run);
				if ($query_rows == 0) {
					echo "invalid";
				}
				else if($query_rows == 1)
				{
					echo "ok";
					$user_id = mysql_result($query_run,0,'id');
					$_SESSION['user_id'] = '$user_id';

					header('Location:LoginUser1.php');
				}
		}
	
	}
	else
	{
		echo "not submited";
	}
}
 


?>

<form action="LogingUser1.php" method="POST">

	Username:-<input type="text" name="username"><br>
	password:-<input type="password" name="password"><br>
	<input type="submit" name="submit" value="submit">
	
</form>
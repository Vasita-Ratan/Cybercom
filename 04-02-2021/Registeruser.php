<?php

//require 'Core.php';
//require 'server.php';
if(!loggedin())
{
		if(isset($_POST['username']) && 
			isset($_POST['password']) && 
			isset($_POST['password_again']) &&
			 isset($_POST['firstrname']) && 
			 isset($_POST['suname']))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			$password_hash = md5($password);
			$password_again = $_POST['password_again'];
			$firstrname =  $_POST['firstrname'];
			$suname = $_POST['suname'];

			if(!empty($username) && !empty($password) && !empty($password_again) && !empty($firstrname) && !empty($suname))
			{
				if(strlen($username)>30 || strlen($firstrname)>40 || strlen($suname)>40)
				{
						echo "lenght of field is max";
				}
				else
				{
					if($password != $password_again)
					{
						echo "password do not match";
					}
					else
					{
							$query = "SELECT `username` FROM `users` WHERE `username` = '$username' ";

							$query_run = mysqli_query($con,$query);
							echo mysql_num_rows($query_run);

							if(mysql_num_rows($query_run) == 1)//fetching the rows
							{
									echo $username."user already exists";
							}
							else
							{
								$Insertq = "INSERT INTO `user` VALUES('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password)."','".mysql_real_escape_string($password_again)."','".mysql_real_escape_string($firstrname)."',
								'".mysql_real_escape_string($suname)."')";

									if($query_run = mysql_query($Insertq))
									{
											header('Location: RegisterSucess.php');
									}
									else
									{
										echo "sorry couldn't register at this time try again latter";
									}
							}
				
					}
				}
			}
			else
			{
				echo "All fields are require";
			}

		}


	?>


<form action="Registeruser.php" method="POST">

	Username:-<input type="text" name="username" maxlength="30"> value="<?php if(isset($username)) echo $username;?>"><br><br>
	password:-<input type="password" name="password" value="<?php if(isset($password)) echo $password;?>"><br><br>
	password:-<input type="password" name="password_again" value="<?php if(isset($password_again)) echo $password_again;?>"><br><br>
	Firstname:-<input type="text" name="firstrname" maxlength="40"> value="<?php if(isset($firstname)) echo $firstname;?>"><br><br>
	surname:-<input type="text" name="suname" maxlength="40"> value="<?php if(isset($suname)) echo $suname;?>"><br><br>


	<input type="submit"  value="register">
	
</form>
	<?php

}
else if(loggedin())
{
		echo "you are loggedin";
}
?>
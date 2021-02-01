
<?php
	/*
	$email = 'vasitaratan123@gmail.com';
	$password = 'Ratan123@gmail.com';

	if(isset($_POST['email']) && isset($_POST['password']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password))
		{
			echo "your are sigin in";
		}
		else
		{
			echo "please try again latter!!!";
		}
	}
	*/

?>


<!DOCTYPE html>
<html>
<head>
	<title>SignIn Form</title>
</head>
<body>
	<form action="SignIn.php" method="POST" onsubmit="return submit_Func()"> 
		<input type="text" name="email" maxlength="50" placeholder="Enter Email"><br><br>
		<input type="password" name="password" placeholder="password"><br>
		<input type="submit" name="signin" value="signin">
</form>


	<script type="text/javascript">
		
		function submit_func()
		{
			email = document.getElementById('email').value;
			password = document.getElementById('password').value;

			if(email == 'vasitaratan123@gmail.com' && password == 'Ratan@123')
			{
				return true;
			}
			else
			{
				return false;
			}

		}

	</script>
</body>
</html>

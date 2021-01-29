<?php

	//echo $_POST['password'];

	$match = 'Ratan@123';
	if(isset($_POST['password']))
	{
		$password = $_POST['password'];
		if($password == $match)
		{
			echo "Login sucessfull";
		}
		else{
			echo "please fill this feild";
		}
	}		

?>

<form action="POSTVar.php" method="POST">

	Password:-<input type="Password" placeholder="Enter the Password" name="password"><br><br>
		<input type="submit" name="submit" value="submit">
</form>
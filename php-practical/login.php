<?php

require 'dbconn.php';
if (isset($_POST['email']) && isset($_POST['password'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	$password = md5($password);
	if(!empty($email) && !empty($password))
	{
		$query =  "SELECT * FROM user WHERE `email` = $email AND `password` = $password";

		if($query_run = mysqli_query($con,$query))
		{
				$query_rows = mysqli_num_rows($query_run);
				if ($query_rows == 0) {
				
				}
				else if($query_rows == 1)
				{
					print_r($query_rows);
				//	$user_id = mysqli_result($query_run,0,'id');
				//	$_SESSION['user_id'] = '$user_id';

					header('Location:register.php');
				}
		}
	
	}
	else
	{
        ?>
		    <script>alert("not submited")</script>;
        <?php
	}
}
 


?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

 
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 30%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=password], select, textarea {
  width: 30%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  align-content: center;
}
</style>

<div class="container" alig="center">
  
<form action="register.php" method="POST"alignment = "center" >

    <label for="email">Email</label><br>
    <input type="text" id="email" name="email" placeholder="Your  email.." required><br><br>
    
    <label for="password">password</label><br>
    <input type="password" id="password" name="password" placeholder="Your  password.." required><br><br>
    
	<input type="submit" name="submit" value="submit" >
    <input type="submit" name="submit" value="register">

</form>
</div>

</div>

</body>
</html> 

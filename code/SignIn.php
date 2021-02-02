<?php

   session_start();

   if(isset($_POST['submit']))
   {

      include 'Dbconn.php';

      $email = mysql_real_escape_string($conn, $_POST['email']);
      $password = mysql_real_escape_string( $conn,$_POST['password']);
     

      $password = password_hash($password, PASSWORD_BCRYPT);

      $query = "select * from SignIn";

      $query_run = @mysqli_query($conn,$query);

      $count = @mysqli_num_rows($query_run);

      if($count>0)
      {
         echo "Record exists";

      }
      else
      {
         if($password == $password)
         {
            $insert_query = "insert into SignIn(`email`,`password`) values($email,$password)";

            $insertq = @mysqli_query($conn,$insert_query);
            if($insertq)
            {
                ?>
                  <script>
                      alert("connection sucessfull");
                   </script>
              <?php
            }
            else
             {
                  ?>
                   <script>
                      alert("connection unsucessfull");
                   </script>
                   <?php
               }

         }
         echo "Doesn't Exists";
      }

   
   }
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

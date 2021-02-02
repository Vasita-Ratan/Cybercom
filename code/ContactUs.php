<?php

   session_start();

   if(isset($_POST['submit']))
   {

      include 'Dbconn.php';
      
      $name = mysql_real_escape_string($conn, $_POST['name']);
      $email = mysql_real_escape_string( $conn,$_POST['email']);
       $subject = mysql_real_escape_string($conn,$_POST['subject']);
      $message = mysql_real_escape_string($conn,$_POST['message']);
     
      $query = "select * from ContactUs";

      $query_run = @mysqli_query($conn,$query);

      $count = @mysqli_num_rows($query_run);

      if($count>0)
      {
         echo "Record exists";

      }
      else
      {
         if($email == $email)
         {
            $insert_query = "insert into ContactUs(`name`,`email`,`subject`,`message`) values($name,$email,$subject,$message)";

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

<form action="ContactUs.php" method="POST"> 
	
		<input type="text" name="name" maxlength="25" placeholder="Enter  Name:-"><br></br>
		<input type="text" name="email" maxlength="50" placeholder="Enter Email"><br><br>
		<input type="text" name="subject" maxlength="50" placeholder="Enter subject"><br><br>
		<textarea name="message" rows="6" cols="30" maxlength="100"></textarea>
		<input type="submit" name="submit" value="Send Message">
</form>
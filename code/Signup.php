<?php

   session_start();

   if(isset($_POST['submit']))
   {

      include 'Dbconn.php';
      
      $fname = mysql_real_escape_string($conn, $_POST['fname']);
      $lname = mysql_real_escape_string( $conn,$_POST['lname']);
      $DoB = mysql_real_escape_string($conn,$_POST['DoB']);
      $gender = mysql_real_escape_string($conn,$_POST['gender']);
      $Country = mysql_real_escape_string($conn,$_POST['Country']);
      $email = mysql_real_escape_string($conn,$_POST['email']);
      $phone = mysql_real_escape_string($conn,$_POST['phome']);
      $password = mysql_real_escape_string( $conn,$_POST['password']);
      $Conpassword = mysql_real_escape_string( $conn,$_POST['Conpassword']);
     

      $password = password_hash($password, PASSWORD_BCRYPT);
      $Conpassword = password_hash($Conpassword, PASSWORD_BCRYPT);

      $query = "select * from SignUp";

      $query_run = @mysqli_query($conn,$query);

      $count = @mysqli_num_rows($query_run);

      if($count>0)
      {
         echo "Record exists";

      }
      else
      {
         if($password == $Conpassword)
         {
            $insert_query = "insert into SignUp(`fname`,`lname`,`DoB`,`gender`,`Country`,`email`,`phone`,`password`,`Conpassword`,) values($fname,$lname,$DoB,$gender,$Country,$email,$Phone,$password,$Conpassword)";

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
<html>
   
   <head>
      <title>SignUp</title>
   </head>
   
   <body>

      
      <form method = "POST" action = "SignUp.php" onsubmit="return validation()">
         <center><strong>Signup</strong></center><br>
            Fist Name:-<input type = "text" name = "fname" required="please Fill the Filed"/><br>
            Lastname:-<input type = "text" name = "lname" required="please Fill the Filed"><br>
             D.O.B:-<select name="month">
                        <option value="months">Months</option>
                        <option value="january">jan</option>
                        <option value="March">Mar</option>
                        <option value="April">Apr</option>
                  </select>
                  <select name="Day">
                        <option value="Days">Days</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4</option>
                  </select>
                  <select name="year">
                        <option value="Years">Years</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">19998</option>
                  </select><br>
            Gender:-<input type = "radio" name = "gender" value = "male">Male
                  <input type = "radio" name = "gender" value = "Female">FeMale<br>

            Country:-<select name="Country">
                           <option value="India">India</option>
                           <option value="America">America</option>
                           <option value="Canada">Canada</option>
                           <option value="Pakistan">Pakistan</option>
                     </select><br>

               Email:-<input type="text" name="email" required="please enter mail"><br>
               Phone:-<input type="text" name="phone" required="please enter Phone number"><br>
            Password:-<input type = "password" name = "password" required="please Fill the Filed"><br>
             Confirm Password:-<input type = "password" name = "Conpassword" required="please Fill the Filed"><br>
           


                  <input type = "submit" name = "submit" value = "Submit"> 
                  <input type = "submit" name = "reset" value = "Reset"><br>

                  <input type="checkbox" name="checkbox">I accept this agrement</input>


      </form>
      <script type="text/javascript" src="signup.js"></script>
   </body>
</html>
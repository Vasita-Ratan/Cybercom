<?php

   session_start();

   if(isset($_POST['submit']))
   {

      include 'Dbconn.php';
      $filename = 'name.txt';
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $password = mysql_real_escape_string( $conn,$_POST['password']);
      $Address = mysql_real_escape_string($conn,$_POST['Address']);
      $Hobby = mysql_real_escape_string($conn,$_POST['Hobby']);
      $gender = mysql_real_escape_string($conn,$_POST['gender']);
      $file = mysql_real_escape_string($conn,$_POST[$filename]);

      $password = password_hash($password, PASSWORD_BCRYPT);

      $query = "select * from User_tbl";

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
            $insert_query = "insert into User_tbl(`name`,`password`,`Address`,`Hobby`,`gender`,`file`) values($name,$password,$Address,$Hobby,$gender,$file)";

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
      <title>PHP UserForm</title>
   </head>
   
   <body>

      
      <form method = "POST" action = "UserForm.php" onsubmit="return validation()">
         <center><strong>UserForm</strong></center><br>
         <table border="2" bgcolor='#6bfc03' align="center">
            <tr>
               <td>Enter Name:</td> 
               <td><input type = "text" name = "name" required="please Fill the Filed"/></td>
            </tr>
            
            <tr>
               <td>Password:-</td>
               <td><input type = "text" name = "password" required="please Fill the Filed"></td>
            </tr>
            <tr>
               <td>Address:</td>
               <td><textarea name = "Address" rows = "6" cols = "40" required="please Fill the Filed"></textarea></td>
            </tr>
            
            <tr>
               <td>Select Game:-</td>
               <td><input type="checkbox" name="Hobby" value="Hockey">Hockey</input><br>
                 <input type="checkbox" name="Hobby" value="Football">Football</input><br>
                   <input type="checkbox" name="Hobby" value="Cricket">Cricket</input></td>
            </tr>
            <tr>
               <td>Gender:-</td>
               <td>
                  <input type = "radio" name = "gender" value = "female">Female
                  <input type = "radio" name = "gender" value = "male">Male
               </td>
            </tr>
             <tr>
               <td>Choosen File:-</td>
               <td><input type="file" name="ChoosenFile" value="ChoosenFile"></td>
            </tr>
            
            <tr>
               <td></td>
               <td>
                  <input type = "submit" name = "submit" value = "Submit"> 
                  <input type = "submit" name = "reset" value = "Reset"> 
               </td>
            </tr>
         </table>
      </form>
      <script type="text/javascript" src="UserForm.js"></script>
   </body>
</html>
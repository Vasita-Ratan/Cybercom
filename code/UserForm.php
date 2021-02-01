<?php
   
      $name = $_POST['name'];
      $password = $_POST['password'];
      $Address = $_POST['Address'];
      $checkbox = $_POST['checkbox'];
      $gender = $_POST['gender'];

      if(true)
      {
         $filename = 'name.txt'
         echo "Username:-".$name.'<br>'."password:-  ".$password.'<br>'."Address:- ".$Address.'<br>'."Game:- ".$checkbox.'<br>'."gender:- ".$gender.'<br>'."file is:- ".$filename;
      }


   


?>
<html>
   
   <head>
      <title>UserForm</title>
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
               <td><input type="checkbox" name="checkbox" value="Hockey">Hockey</input><br>
                 <input type="checkbox" name="checkbox" value="Football">Football</input><br>
                   <input type="checkbox" name="checkbox" value="Cricket">Cricket</input></td>
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
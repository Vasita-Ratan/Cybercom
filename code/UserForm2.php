<?php
   
      $name = $_POST['name'];
      $password = $_POST['password'];
      $gender = $_POST['gender'];
      $Address = $_POST['Address'];
      $date = $_POST['date'];
      $checkbox = $_POST['checkbox'];
      $status = $_POST['status'];
    if(true)
      {
         $filename = 'name.txt'
         echo "Username:-".$name.'<br>'."password:-  ".$password.'<br>'."gender:- ".$gender.'<br>'."Address:- ".$Address.'<br>'.$date.'<br>'."Game:- ".$checkbox.'<br>'."Marital status is:- ".$status;
      }
?>
<html>
   
   <head>
      <title>UserForm</title>
   </head>
   
   <body>

      
      <form method = "POST" action = "UserForm.php" onsubmit="return validation()">
         <center><strong>UserForm</strong></center><br>
            Enter Name:-<input type = "text" name = "name" required="please Fill the Filed"/>
            Password:-<input type = "text" name = "password" required="please Fill the Filed">
            Gender:-<input type = "radio" name = "gender" value = "female">Female
                  <input type = "radio" name = "gender" value = "male">Male<br>
            Address:-<textarea name = "Address" rows = "6" cols = "40" required="please Fill the Filed"></textarea><br>
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
               Select Game:-
                  <input type="checkbox" name="checkbox" value="Hockey">Hockey</input>
                 <input type="checkbox" name="checkbox" value="Football">Football</input>
                   <input type="checkbox" name="checkbox" value="Cricket">Cricket</input><br>

Marrital Status:- <input type = "radio" name = "status" value = "Married">Married
                  <input type = "radio" name = "status" value = "Unmarried">Unmarried<br>
         
                  <input type = "submit" name = "submit" value = "Submit"> 
                  <input type = "submit" name = "reset" value = "Reset"><br>

                  <input type="checkbox" name="checkbox">I accept this agrement</input>


      </form>
      <script type="text/javascript" src="UserForm2.js"></script>
   </body>
</html>
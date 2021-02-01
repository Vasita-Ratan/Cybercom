<?php
   
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $password = $_POST['password'];
      $gender = $_POST['gender'];
      $Address = $_POST['Address'];
      $date = $_POST['date'];
      $status = $_POST['status'];
      $checkbox = $_POST['checkbox'];
    if(true)
      {
         echo "First name:-".$fname.'<br>'."Last name:-".$lname.'<br>'.$date.'<br>'."gender:- ".$gender.'<br>'."Country:- ".$Country.'<br>'."email:- ".$email.'<br>'."mobile:- ".$mobile.'<br>'."password:-  ".$password.'<br>'."Confirm password:-  ".$conpassword.'<br>'.$checkbox.'<br>';
      }
?>
<html>
   
   <head>
      <title>UserForm</title>
   </head>
   
   <body>

      
      <form method = "POST" action = "UserForm.php" onsubmit="return validation()">
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
               Phone:-<input type="number" name="mobile" required="please enter Phone number"><br>
            Password:-<input type = "password" name = "password" required="please Fill the Filed"><br>
             Confirm Password:-<input type = "password" name = "Conpassword" required="please Fill the Filed"><br>
           


                  <input type = "submit" name = "submit" value = "Submit"> 
                  <input type = "submit" name = "reset" value = "Reset"><br>

                  <input type="checkbox" name="checkbox">I accept this agrement</input>


      </form>
      <script type="text/javascript" src="signup.js"></script>
   </body>
</html>
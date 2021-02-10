<?php

require 'dbconn.php';

 


?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

 
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 20%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  
}
input[type=password], textarea {
  width: 20%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=Conpassword], textarea {
  width: 20%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=textarea], textarea {
  width: 30%;
  height: 05pc;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 1px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 10px;
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
  align-items:  center;
}
</style>

<div class="container" alig="center">
  
<form action="Insert_register.php" method="POST" >

    <h3><strong>Registration Form</strong></h3>
<div class="dropdown">
<label for="prefix">prefix</label>

<select id="prefix">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
</div>

    <label for="Firstname">Firstname</label><br>
    <input type="text" id="Firstname" name="fname" placeholder="Your  Firstname.." required>

    <label for="Lastname">Lastname</label>
    <input type="text" id="Lastname" name="lname" placeholder="Your  Lastname.." required><br>

     <label for="email">Email</label><br>
    <input type="text" id="email" name="email" placeholder="Your  email.." required></n></n>

    
    <label for="Mobile">Mobileno</label>
    <input type="text" id="mobile" name="mobile" placeholder="Your  phone number.." required><br>
    
    
    <label for="password">password</label><br>
    <input type="password" id="password" name="password" placeholder="Your  password.." required>

     
    <label for="Conpassword">Conform password</label>
    <input type="password" id="Conpassword" name="Conpassword" placeholder="Enter Conform password.." required><br>

    <label for="textarea">Information</label>
    <input type="textarea" id="textarea" name="information" placeholder="Your  information.." required><br>
    

    <input type = "checkbox" id="checkbox1" name= "ch1" >Hereby, I Accept Terms & Conditions.</input><br>
    
	<input type="submit" name="submit" value="submit" >

</form>
</div>

</div>

</body>
</html> 

<?php

require 'Dbconn.php';
if (isset($_POST['name']) && isset($_POST['email'])  && isset($_POST['phone'])  && isset($_POST['title'])  && isset($_POST['created'])) {
    echo $name = $_POST['name'];
    echo $email = $_POST['email'];
    echo $phone = $_POST['phone'];
    echo $title = $_POST['title'];
    echo $created = $_POST['created'];
	


	if(!empty($name) && !empty($email) && !empty($phone) && !empty($title) && !empty($created))
	{
		$query =  "select * from users where `username` = '".mysql_real_escape_string($username)."' and `password` = '".mysql_real_escape_string($password_hash)."' ";//this fun securing from sql injection 

		if($query_run = mysql_query($query))
		{
				$query_rows = mysql_num_rows($query_run);
				if ($query_rows == 0) {
					echo "invalid";
				}
				else if($query_rows == 1)
				{
					echo "ok";
					$user_id = mysql_result($query_run,0,'id');
					$_SESSION['id'] = '$id';

					header('Location:.php');
				}
		}
	
	}
	else
	{
		alert("not submited");
	}
}
 


?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: blue;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: yellow;
  color:blue ;
}

.topnav a.active {
  background-color: blue;
  color: white;
}

.topnav-right {
  float: right;
}
</style>
</head>
<body>

<div class="topnav">
 
  <div class="topnav-right">
  <a href="Home.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="Contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  </div>
</div>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
}
</style>
</head>
<body >

<h3><strong>Create Contact<strong></h3>

<div class="container">
  <form action="/action_page.php">
    <label for="id">ID </label><br>
    <input type="text" id="id" name="id" placeholder="Your ID.." required></n></n>

    <label for="name">Name</label><t>
    <input type="text" id="name" name="name" placeholder="Your  name.."><br>

    <label for="email">Email</label><br>
    <input type="text" id="email" name="email" placeholder="Your  email..">
    
    <label for="phone">phone</label>
    <input type="text" id="phone" name="phone" placeholder="Your  phone number.."><br>
    
    <label for="title">Title</label><br>
    <input type="text" id="title" name="title" placeholder="Your  title..">
    
    <label for="created">Created</label>
    <input type="date" id="created" name="created" placeholder="select Date."><br>
    

    <input type="submit" value="Create">
  </form>
</div>

</body>
</html>



</body>
</html> 

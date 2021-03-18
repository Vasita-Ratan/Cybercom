<?php 
  $statusOption = [0 => 'Enabled', 1 => 'Disabled'];
    $payments = $this->getPayments();
	
		
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 20%;
  padding: 0px;
  border: 1px solid #ccc;
  border-radius: 2px;
  box-sizing: border-box;
  margin-top: 0px;
  margin-bottom: 6px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  width: 80px;
  height: 60px;
  padding: 12px 12px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 2px;
  background-color: #f2f2f2;
  padding: 15px;
}
input[type=dropdown] select,textarea{
  width: 10%;
  padding: 0px;
  border: 1px solid #ccc;
  border-radius: 2px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 6px;
  resize: vertical;
}
</style>

</head>
<body ><br>


<div class="container" id="form">
<form method="POST"  action="<?php echo $this->geturl("save");?>" >
	
	<h2><u>Login</u></h2>
		<div class = "form-group">
			<label>username:-</label><br>
			<input type="text" name="login[username]" align="center" value="<?php echo $logins->username; ?>" placeholder="Enter username" required="true"><br>
		</div>
		<div class = "form-group">
			<label>Password:-</label><br>
			<input type="password" name="login[password]" value="<?php echo $logins->password; ?>" placeholder="Enter password" required="true"><br>
		</div>	
		<div class = "form-group">
			<input type="submit" name="Login" class="button save" id="submit" value="Login">
		</div>
      <div class = "form-group">
      <input type="register" name="register" class="button save" id="register" value="Register">
    </div>
</form>	
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>
</html>


<?php

require 'dbconn.php';

 


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

<h3><strong>Add new Blog Post<strong></h3>

<div class="container">
  <form action="Insert_Blog.php" method='POST'>
   

    <label for="Title">Title</label><t>
    <input type="text" id="Title" name="Title" placeholder="Your  Title.." required><br>

    <label for="textarea">Content</label>
    <input type="textarea" id="textarea" name="Content" placeholder="Your  Content.." required><br>

    <label for="url">Url</label><t>
    <input type="text" id="url" name="url" placeholder="Your  url.." required><br>

    <label for="Meta Title">Meta Title</label>
    <input type="text" id="Meta Title" name="Meta Title" placeholder="Your Meta Title.." required><br>

    <div class="dropdown">
         <label for="parent category">parent Category</label>

        <select id="parent category">
            <option value="education">education</option>
            <option value="Gym">Gym</option>
            <option value="cartoon">cartoon</option>
            <option value="movie">movie</option>
        </select>
    </div><br>
    <label for="parent category">Image</label>
        <input type="file" name="image" value="upload image"></input><br>
        <input type="submit" value="submit">
  </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>




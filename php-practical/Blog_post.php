
<?php

session_start();
include('dbconn.php'); 
include('navigationbar.php');  


$query = "SELECT * FROM user1";
$result = mysqli_query($con, $query);
$users = $result -> fetch_all(MYSQLI_ASSOC);
// $users =  mysqli_fetch_array($result);  

if(isset($_GET['failure'])){
  echo '<script> alert('.$_GET['failure'].')</script>';
}

?>
<!DOCTYPE html>
<html>


<head>
<style>
@import url("https://fontawesome.com/v4.7.0/assets/font-awesome/css/font-awesome.css");
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

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>

<form action = "Add_blog_post.php" method = "POST">

<h2>Blog Post</h2>
<input type="submit" value="Add Blog Post"></input><br><br>
<table>


  <tr>
    <th>Post ID</th>
    <th>Category name</th>
    <th>Title</th>
    <th>Published Date</th>
    <th>Action</th>
    
  </tr>
  <?php 
    if(!empty($users)){
    foreach($users as $row){
      
      ?>
  <tr>
      <td><?=$row['postId']?></td>
      <td><?=$row['cat_name']?></td>
      <td><?=$row['Title']?></td>
      <td><?=$row['Published Date']?></td>
      <td> <a href="Delete1.php?id=<?=$row['id']?> " > <i class='fa fa-times'>Delete</i></a> </td>
      <td> <a href="update.php?id=<?=$row['id']?> " > <i class='fa fa-pencil'>update</i></a> </td>
  </tr>

      <?php
    }
  }else{

    ?>
  <tr>
    <td> No Records Found ! </td>
  </tr>
    <?php

  }

  ?>
  
</table>

</body>
</html>

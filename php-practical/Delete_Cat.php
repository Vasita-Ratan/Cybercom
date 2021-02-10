<?php

include 'dbconn.php';

$id = $_GET['id'];
$query = "DELETE FROM category1 where id = ".$id;
$result = mysqli_query($con, $query);

header('Location:Blog_category.php');
?>
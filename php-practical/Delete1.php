<?php

include 'dbconn.php';

$id = $_GET['id'];
$query = "DELETE FROM blog_post where id = ".$id;
$result = mysqli_query($con, $query);

header('Location:Blog_post.php');
?>
<?php

	$filename = $_FILES['file']['name'];//associate to file then click on submit show in browser which file choosen
	$size = $_FILES['file']['size'];
	$type = $_FILES['file']['type'];
	$temp_name = $_FILES['file']['tmp_name'];

	$error = $_FILES['file']['error']; //return 1 is error otherwise o is not error

	echo $filename;
?>


<form action="FileUpload.php" method="POST" enctype="multipart/form-data">
	


	<input type="file" name="file"><br><br>
	<input type="submit" value="submit">

</form>
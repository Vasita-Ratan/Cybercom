<?php

	$name = $_FILES['file'] ['name'];//associate to file then click on submit show in browser which file choosen

	$extension = strtolower(substr($name, strpos($name,'.') +1));
	$size = $_FILES['file']['size'];
	$type = $_FILES['file']['type'];
	 $temp_name = $_FILES['file'] ['tmp_name'];

	 $max_Size = 100000;

	//$error = $_FILES['file']['error']; //return 1 is error otherwise o is not error
	die();

	if(isset($name))
	{
		if(!empty($name))
		{
			if(($extension == 'jpg' || $extension == 'jpeg') && ($type == 'image/jpeg' || $type == 'image/jpg') && $size <= $max_Size)
			{ 

				$location = 'upload/';
				if(move_uploaded_file($temp_name,$location.$name))
				{
					echo "uploaded";
				}
				else
				{
					echo "there was error";
				}
			}
			else
			{
				echo "file must be jpg/jpeg must be 2mb less then ";
			}
		}
		else {
			echo "please chooese the file";
		}
	}
?>


<form action="FileSizeRistrict.php" method="POST" enctype="multipart/form-data">
	


	<input type="file" name="file"><br><br>
	<input type="submit" value="submit">

</form>
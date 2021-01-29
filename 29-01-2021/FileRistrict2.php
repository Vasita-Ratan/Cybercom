<?php

	 $name = $_FILES['file'] ['name'];//associate to file then click on submit show in browser which file choosen
	//$size = $_FILES['file']['size'];
	echo $extension = strtolower(substr($name, strpos($name, '.')+ 1));//on extension after string print return the extension of file 
	 $type = $_FILES['file']['type'];
	
	$temp_name = $_FILES['file'] ['tmp_name'];

	//$error = $_FILES['file']['error']; //return 1 is error otherwise o is not error
	die();

	if(isset($name))
	{
		if(!empty($name))
		{
			if(($extension == 'jpg' || $extension == 'jpeg') && $type == 'image/jpg')
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
			 else{
			 	echo "File Must be jpg/jpeg";
			 }

		}
		else {
			echo "please chooese the file";
		}
	}*/
?>


<form action="FileRistrict2.php" method="POST" enctype="multipart/form-data">
	


	<input type="file" name="file"><br><br>
	<input type="submit" value="submit">

</form>
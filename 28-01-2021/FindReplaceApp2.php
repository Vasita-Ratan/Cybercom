<?php


	if(isset($_POST['user_text'])&& isset($_POST['search'])&& isset($_POST['Replace']))//bind the variables
	{
		echo $user_text = $_POST['user_text'];
		echo $search = $_POST['search'];
		echo $Replace = $_POST['Replace'];
	

		if (!empty($user_text)&& !empty($search) && !empty($Replace)) {
		
			echo "its working properly";
		}
		else
		{
			echo "please fulfill all feilds";
		}
	}	


?>

<form action="FindReplaceApp.php" method="POST">
	
	<textarea name= "user_text" cols="30" rows="7"> <?php echo $user_text; ?></textarea><br><br>

	search For:-<br>
	<input type="text" name="search" ><br><br>

	Replace it:-<br>
	<input type="text" name="Replace"><br>


	<input type="submit" name="submit" value="Find and Replace">

</form>
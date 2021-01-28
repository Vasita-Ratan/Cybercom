<?php



?>

<form action="FindReplaceApp.php" method="POST">
	
	<textarea name= "user_text" cols="30" rows="7"> <?php echo $user_text; ?></textarea><br><br>

	search For:-<br>
	<input type="text" name="search" ><br><br>

	Replace it:-<br>
	<input type="text" name="Replace"><br>


	<input type="submit" name="submit" value="Find and Replace">

</form>
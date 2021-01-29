<?php

if(isset($_POST['name']))
{
	$name = $_POST['name'];
	if(!empty($name))
	{
		$handle = fopen('name.txt', 'a');
		fwrite($handle, $name."\n");//this fun write in the txt file
		fclose($handle);//closes the connection and this file also
			
	}

	else
	{
		echo "please check again";
	}
}


?>

<form action="FileHandlingRead.php" method="POST">

	<input type="text" name="name"><br><br>
		<input type="submit" name="submit" value="submit">
</form>
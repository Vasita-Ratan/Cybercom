<?php

$script_name = $_SERVER['SCRIPT_NAME'];//redirect to the submiting the data into anotherpage.php file


?>	

<form action="<?php  echo $script_name ?>" method="POST">
		<input type="submit" name="submit" value="submit">

</form>
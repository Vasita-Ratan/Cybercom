<?php

 require 'server.php';

 if(isset($_POST['name']))
 {
 	$name = $_POST['name'];

 	if(!empty($name))
 	{
 		if(strlen($name)>=4)
 		{
 			$query = "SELECT `name` FROM `name` WHERE `name` LIKE '%".mysqli_real_escape_string($name)."%'";

 			$query_run = mysqli_query($query);	

 			$query_num_rows = mysqli_num_rows($query_run);
	 		if($query_num_rows>=1)
 			{	
 				echo $query_num_rows."Record  found";	
 				while ($query_row = mysqli_fetch_assoc($query_run)) {

 					echo $query_row['name'].'<br>';
 				}
 				# code...
 			}
 			else
 			{
 				echo "Record not found";
 			}
 		} 
 		else
 		{
 			echo "5 character is more then 4";
 		}
 	}

 }

?>


<form action="index.php" method="POST">

			NAME:-<input type="text" name="name"><br>
			<input type="submit" name="submit" value="submit">

</form>
<?php

if(isset($_POST['name']))
{
	$name = $_POST['name'];
	if(!empty($name))
	{
		$handle = fopen('name.txt', 'a');
		fwrite($handle, $name."\n");//this fun write in the txt file
		fclose($handle);//closes the connection and this file also
			

		echo "current name in file";
		$count = 1;	
		$readin = file('name.txt');//this fun read file line by line
		//$redtream = trim($fname);
		$readin_Count = count($readin);
		foreach ($readin as $fname) {//this fun fetch one by one name into file
				echo trim($fname);//contening whitespace trim()
				if($count<$readin_Count)
				{
					echo ',';
				}
				$count++;
			
		}
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
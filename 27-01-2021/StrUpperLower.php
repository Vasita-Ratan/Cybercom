<?php
	/*
		$string = 'Ratan';
		$struppercase = strtoupper($string);//return uppercase latter
		$strlowercase = strtolower($string);//return lowercase latter

		echo $struppercase.'<br>'.$strlowercase;
	*/

		if(isset($_GET['user_name']) && ! empty($_GET['user_name']))
		{
			 $user_name = $_GET['user_name'];
			  $user_name_lc = strtolower($user_name);


			 if($user_name_lc == 'ratan')//comparing the lowercase later
			 {
			 	echo "you are Ratan".$user_name;//to show the username in lower or uppercase latter
			 }
		}
		
?>


<form action="StrUpperLower.php" method="GET">


	Name:-<input type="text" name="user_name" id="user_name"><br><br>

	<input type="submit" name="submit" value="submit">
	

</form>
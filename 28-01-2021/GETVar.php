<?php

		if(isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year']))
		{
		//display the value on browser as well
		 // echo $day = $_GET['day'];//
		  //echo $date = $_GET['date'];
		  //echo $year = $_GET['year'];

		  $day = $_GET['day'];//
		   $date = $_GET['date'];
		   $year = $_GET['year'];

		if(!empty($day)&&!empty($date)&&!empty($year))
		{
				echo "its completed";	
		} 
		else
		{
			echo "please fill the feild";
		}
	}

?>

<form action="" method="GET">

	Day:-<input type="text" name="day"><br><br>
	Date:-<input type="text" name="date"><br><br>
	year:-<input type="text" name="year"><br><br>
		<input type="submit" name="submit" value="submit">
	

</form>
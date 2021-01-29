<?php

		if(isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year']))
		{
		//display the value on browser as well
		 // echo $day = $_GET['day'];//
		  //echo $date = $_GET['date'];
		  //echo $year = $_GET['year'];

			//if you use htmlintities function to allow when you insert any html tags in our feilds
		  $day = htmlentities($_GET['day']);//
		   $date = htmlentities($_GET['date']);
		   $year = htmlentities($_GET['year']);

		if(!empty($day)&&!empty($date)&&!empty($year))
		{
				echo "its completed".$day.'date is '.$date. 'year is '.$year;	
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
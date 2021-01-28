<?php

//$rand = rand();//this fun genrate random numbers

//$randmax = getrandmax();

//echo $randmax;


		if (isset($_POST['roll'])&& !empty($_POST['roll'])) {
				$rand = rand(1,5);//specify min and max value in the rand function.
				echo $rand;
		}
?>

<form action="RandNum.php" method="POST">
		<input type="submit" name="roll" value="Roll a dice">

</form>
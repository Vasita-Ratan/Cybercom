<?php
	
	//AND operator
	/*$num1 = 4000;

	$upper = 10000;
	$lower = 5000;

	if($num1 <= $upper && $num1 >= $lower )
	{
		echo "Range between 5000 to 10000";
	}
	else
	{
		echo "Range bellow 5000 to 10000";
	}*/

	//OR operator

	$num1 = 6000;

	$upper = 10000;
	$lower = 5000;

	if(!($num1 == $upper) &&! ($num1 == $lower))
	{
		echo "Range between 5000 to 10000";
	}
	else
	{
		echo "Range bellow 5000 to 10000";
	}



?>

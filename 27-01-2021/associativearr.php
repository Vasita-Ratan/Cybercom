<?php
	
	//$arrayName = array('meghraj','sumit','karan');
	$arrayName1 = array('meghraj' => 20,'sumit'=>100,'karan' =>150);//in associative use => to appear value perticular element and index is change with key

	echo $arrayName[1];//simple index by find the value

		echo $arrayName1['karan'];//this way to fatch the value of on that inedx is appear can't define dircetly any index number
	print_r($arrayName);//add new index in array
	print_r($arrayName1['karan']);
?>


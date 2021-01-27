<?php
	
	$arrayName1 = array('name' => array('meghraj','sumit','karan') , 'surname' => array('Vasita','patel','shah','parmar'));

	//echo $arrayName1['name'][2];

	foreach($arrayName1 as $name => $surname) {
		
		echo '<strong>'.$name.'</strong><br>';
		foreach ($surname as $item) {//inner array looping by foreach loop fetch items
				echo $item.'<br>';			
		}
		
	}
?>
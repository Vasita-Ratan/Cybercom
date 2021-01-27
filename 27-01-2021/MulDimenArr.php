<?php

/*
1)Name:-

meghraj
sumit
karan

2)surname:-
Vasita 
patel
shah


*/
	$arrayName1 = array('name' => array('meghraj','sumit','karan') , 'surname' => array('Vasita','patel','shah'));

	echo $arrayName1['name'][0].['surname'][0];//error both array not work that time

	echo $arrayName1['name'][0];//muldimention array define by =>		


?>
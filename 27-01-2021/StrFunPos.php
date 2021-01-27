<?php


$find = 'meghraj';
$offset = 0;
$search = strlen($find);
$strpositon = "this is meghraj";

 echo strpos($strpositon , $find,5);//count the position then search perticular character

 while ($str_positon = strpos($strpositon,$find ,$offset) {
  	echo "<strong>".$find."</strong>found at".$str_positon.'<br>';//postion by string find

  	$offset = $str_positon + $search;
  } 

?>
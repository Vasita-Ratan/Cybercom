<?php
/*
$str1 = ' my name is Ratan ';//remove or trim whitespace
//$str1 = '&nbsp;my name is Ratan &nbsp;';//&nbsp use to create whitspace both endside
$string_trimmed = trim($str1);
//$string_trimmed = ltrim($str1);//righthandside remove whitespace
//$string_trimmed = rtrim($str1);//lefthandside remove whitspace
  echo $string_trimmed;

*/
  //slashes

  $string = 'my profile is <img src= "p1.jpg">';

  $string_slashe = htmlentities(addslashes($string));//use to add backslash its add at html tag content use for security perpose

  echo $string_slashe; 
?>
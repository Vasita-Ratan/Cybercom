<?php

//$string = 'Your name is Ratan.';
//$string = '123456789';//also shuffle integer values
//$string_Shuffled = str_shuffle($string);//mixing and shuffling the string


//if you want half split string to use substring function 

//$half_shuffled = substr($string_Shuffled, 0,5);//require shuffle variable and mantion limit starting and ending element
//echo $string_Shuffled;

//$half_shuffled = substr($string_Shuffled, strlen($string)/2);//also use strlen function show the half string 
//echo $half_shuffled;


$string1 = 'Vasita Ratan is here';

$string_reversed = strrev($string1);//strrev use to reverse the string
echo substr($string_reversed, strlen($string1)/2);
?>

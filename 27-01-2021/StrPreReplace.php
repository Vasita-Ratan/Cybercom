<?php

$find = array('is','define','by');//this value remove from the string 

$renew = array('IS','DEFINE','BY');
$string = "this is my program define by examples";

$strreplace = str_replace('is', ' ', $string);

$strreplace = str_replace($find, $renew, $strreplace);//array value are remove what we have specify in array

echo $strreplace;

?>
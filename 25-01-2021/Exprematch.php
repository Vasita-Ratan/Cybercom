<?php

$str = 'this is meghraj';
//preg_match();//string inside or not

if(preg_match('/ /', $str))//first parameter is require backslash
{
	echo "true";
}
else
{
	echo "false";
}
?>
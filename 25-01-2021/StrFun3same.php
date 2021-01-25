<?php

$str1 = 'my name is Vasita Ratan';
$str2 = 'my name is vasita ratan';

$ans2 = strlen($str1);//returning length of the string if create form in take validation to use strlen 
similar_text($str1, $str2,$ans);//comparing both the string return in percentage

echo "simmiler text:- " .$ans."<br>";
if($str1<=23)
{
	echo "yes string length between:- " .$ans2;
}
else
{
	echo "string length above 23";
}
?>

<?php
//return any value define inside the function
function add($n1,$n2)
{
	$result = $n1 + $n2;

	return $result;
}
echo "sum is:- ".add(10,20)."<br>";

function sub($n1,$n2)
{
	$result = $n1 - $n2;

	return $result;
}
echo "substraction is:- ".sub(10,20)."<br>";
function mul($n1,$n2)
{
	$result = $n1 * $n2;

	return $result;
}
echo "Multiplication is:- ".mul(10,20)."<br>";
function div($n1,$n2)
{
	$result = $n1 / $n2;

	return $result;
}
//echo add(300,300) +100 ;
echo "division is:- ".div(10,20)."<br>";

$sum = div(add(150,150),add(100,100));//define div function within add function Division operation perform 

echo $sum;
?>
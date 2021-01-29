<?php
/*
$filename_or = 'image.jpg';

$filename = rand(1000,9999).md5($filename_or).rand(1000,9999);//rand() generate numbers and md5() is 32 char hash function call

echo $filename;

*/

$filename = 'files/fourth.txt';

if(file_exists($filename))//this function use to check file exists or not
{
	echo "yes true ";
}
else
{
	$handle = fopen($filename, 'w');
	fwrite($handle, 'working');
	fclose($handle);
}
?>
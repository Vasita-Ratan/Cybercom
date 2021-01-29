<?php


function hit_count()		
{
	$filename = 'count.txt';
	$handle = fopen($filename, 'r');

	$curent = fread($handle, filesize($filename));

	fclose($handle);

	$count_inc = $curent + 1;

	$handle = fopen($filename, 'w');
	fwrite($handle, $count_inc);
	fclose($handle);

}
?>
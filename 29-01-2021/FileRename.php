

<?php


$filename = 'files/second.txt';

$rand = rand(10000,9999);

if(rename($filename,$rand.'.txt'))//unlink() use to delete the file for specified path
{
	echo "file rename <strong>".$filename.'has been rename with '.$rand.'.txt</strong>';
}
else
{
		echo "file not rename";
}
?>


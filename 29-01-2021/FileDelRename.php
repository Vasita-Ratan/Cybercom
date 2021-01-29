<?php


$filename = 'files/fourth1.txt';


if(unlink($filename))//unlink() use to delete the file for specified path
{
	echo "file deleted".$filename;
}
echo "file not delete";

?>
<?php

$directory = 'files';


if($handle = opendir($directory.'/'))//open the directory created
{
	echo 'looking inside ' .$directory.':<br>';
}
?>
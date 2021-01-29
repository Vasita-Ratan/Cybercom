<?php

$directory = 'files';


if($handle = opendir($directory.'/'))//open the directory created
{
	echo 'looking inside ' .$directory.':<br>';

	while($file = readdir($handle))
	{
		if($file!='.' && $file != '..')//no equal to . or ..
		{
			echo '<a href = "'.$directory.'">'.$file.'</a><br>';//apply hyperlink on three txt filed create in htdocs folder
		}
	}
	
}
?>
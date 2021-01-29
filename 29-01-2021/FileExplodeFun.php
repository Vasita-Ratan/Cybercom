
<?php

		$filename = 'name.txt';
		$handle = fopen($filename, 'r');
		 $detail =  fread($handle, filesize($filename));//simply file open in read mode 

		$array_fetch = explode(',', $detail);//split the detail

		/*
		foreach ($array_fetch as $name) {//return in single line data
			echo $name.'<br>';
		}
		fclose($handle);//closes the connection and this file also
		*/

		echo $array_fetch[0];	
?>
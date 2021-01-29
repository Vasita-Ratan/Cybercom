<?php

  

function hit_count()		
{
	$ip_address = $_SERVER['REMOTE_ADDR'];
		$ip_file = file('ip.txt'); 

		foreach ($ip_file as $ip) {

			echo $ip_single =  trim($ip);
			if($ip_address==$ip_single)
			{
				$found = false;
				break;
			}
			else
			{
				$found = true;
				break;
			}
		}
			if($found == true )
			{
				//increment count.txt value
				//echo "ip found";

				$filename = 'count.txt';
				$handle = fopen($filename, 'r');
				$current = fread($handle, filesize($filename));
				fclose($handle);

				$current_in = $current +1;
				$handle = fopen($filename, 'w');
				fwrite($handle, $current_in);
				fclose($handle);


					$handle = fopen('ip.txt', 'a');
					fwrite($handle, $ip_address."\n");
					fclose($handle);


			}
		
}
?>
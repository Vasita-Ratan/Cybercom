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
				echo "ip found";
			}
		
}
?>
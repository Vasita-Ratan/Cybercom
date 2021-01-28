<?php

	require('VisitorIpAdd.php');

	echo $ip_add;

	foreach ($ip_block as $ip) {
			//echo $ip.'<br >';

		if($ip == $ip_add)//if true die the execution
		{
			die('your ip has '.$ip_add. 'has blocked');
		}
	}

?>

<h1>Welcome</h1>
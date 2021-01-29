<?php
$browser = get_browser(null,true);//allows the ini file and get configration

$browser_Str = strtolower($browser['browser'] );

//echo $browser['browser']; 
//print_r($browser);//define thehistory of which broser you use 

if($browser_Str == 'chrome')//define use or not this browser
{
	echo 'your are not using chrome';
}
?>
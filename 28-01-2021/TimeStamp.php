<?php

$time = time();///time function to define the time

//$datetime = date('H:i:s',$time);//specify in date fun define hour min second
$datetime = date('D:M:Y.H:i:s',$time);
echo $datetime	;

?>
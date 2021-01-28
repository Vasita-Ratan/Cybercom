<?php

$time = time();///time function to define the time

//$datetime = date('H:i:s',$time);//specify in date fun define hour min second
$now_time = date('D:M:Y.H:i:s',$time);
//$modify_time = date('D:M:Y.H:i:s',strtotime('-7 week'));//modify time by using date function
//$modify_time = date('D:M:Y.H:i:s',$time -strtotime('30 second'));
$modify_time = date('D:M:Y.H:i:s',$time-(4*24*20*20));
echo $now_time.'<br>'.$modify_time	;

?>
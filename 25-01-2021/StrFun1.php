<?php

$string = 'Your name is Ratan. & its my job.';

$string_word_count = str_word_count($string, 1,'&.');//pass here three arguments first is var name second is position what you have to show third argument also consider dotes etc.

//echo $string_word_count;//its count the string what i have mantion in variable.  
print_r( $string_word_count);//this will show in array with index key position with its val
?> 
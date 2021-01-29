<?php

//w write in file
//r  Read on file
//a append add file

$handle = fopen('name.txt', 'w');

fwrite($handle, 'Hi meghraj'."\n");//this fun write in the txt file
fwrite($handle, 'Hi Sumit');

fclose($handle);//closes the connection and this file also

echo "Terminate";

?>
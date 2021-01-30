<?php

$videos = simplexml_load_file('https://www.youtube.com/watch?v=ia1iuXbEaYQ');

echo '<strong>Title</strong>:<br>'.$videos->title.'<br>';//get the title of youtube video
echo '<strong>Description:</strong><br>'.$videos->content;//get the description of video
?>
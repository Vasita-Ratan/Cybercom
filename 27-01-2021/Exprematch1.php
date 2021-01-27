<?php


  function has_space($string)
  {

  	if(preg_match('//', $string))
  	{
  		return true;
  	}
  	else
  	{
  		return false;
  	}
  }

  if(has_space('mynameisRatan')//searching the spaces between the character if fatch space to return it otherwise false use has_space
  {
  	echo 'has space';
  }
  else
  {
	echo 'has not space';	
  }

?>
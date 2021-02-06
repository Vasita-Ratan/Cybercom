<?php


/**
 * 
 */
class Display
{
	
	public function __construct($Something)
	{
		 return $this->saSomething($Something);
	}

	public function saSomething($Something)
	{
		echo $Something;
	}
}

$ans = new Display('hello');

//$ans->thisSomething();
//$ans->saSomething();

?>

<?php

class Circle
{
	const pi = 3.14;

	public function area($redius)
	{
		return self::pi * ($redius*$redius); 
	}
}

$ans = new Circle();
echo $ans->area(20);

?>
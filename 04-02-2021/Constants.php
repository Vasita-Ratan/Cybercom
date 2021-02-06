<?php

class Circle
{
	const pi = 3.14;

	public function area($redius)
	{
		return self::pi * ($redius*$redius); //when get error use self:: on this
	}
}

$ans = new Circle();
echo $ans->area(20);

?>
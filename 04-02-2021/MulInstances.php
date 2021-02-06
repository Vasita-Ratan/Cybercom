<?php


class BanckAcc
{
	public $balance = 2000;

	public function Displaybal()
	{
		echo "balance is:-  ".$this->balance;
	}
	public function WithDraw($amount)
	{
		if(($this->balance)<$amount)
		{
			echo "no money  enough";
		}
		else
		{
			return $this->balance = $this->balance - $amount.'<br>';
		}
	}
	public function Diposit($amount)
	{
		if(($this->balance)<$amount)
		{
			echo "no money  enough";
		}
		else
		{
			return $this->balance = $this->balance + $amount.'<br>';
		}
	}
}

$ans = new BanckAcc;

//$ans->WithDraw(100);
//$ans->Diposit(300);
$ans->Displaybal().'<br>';
echo "value is:- ".$ans->WithDraw(200).'<br>';
echo "value is:- ".$ans->Diposit(200).'<br>';


?>
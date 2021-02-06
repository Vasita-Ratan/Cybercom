<?php
class BanckAcc
{
	public $balance = 2000;
	public $type = '';

	public function setType($input)
	{
		return "balance is:-  ".$this->type = $input ;
	}	

	public function Displaybal()
	{
		return "balance is:-  ".$this->balance;
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
class SavingBankAcc extends BanckAcc
{

}

$ans = new BanckAcc;
echo $ans->setType('18-20 current').'<br>';

echo $ans->Displaybal().'<br>';
echo "Avalue is:- ".$ans->WithDraw(200).'<br>';
echo "Avalue is:- ".$ans->Diposit(200).'<br>';


$ans_saving = new SavingBankAcc;
$ans_saving->Displaybal().'<br>';
echo "Bvalue is:- ".$ans_saving->WithDraw(200).'<br>';
echo "Bvalue is:- ".$ans_saving->Diposit(200).'<br>';
echo "Bvalue is:- ".$ans_saving->setType('saver').'<br>';


echo $ans->type.''.$ans->Displaybal().'<br>';

echo $ans_saving->type.''.$ans_saving->Displaybal().'<br>';




?>
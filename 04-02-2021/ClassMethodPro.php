<?php



/**
 * 
 */
class BankAcc
{
	public $balance = 200;
	public function DisplayDetail()
	{
		return "Balace is ".$this->balance.'<br>';
	}

	public function Withdraw($amount)
	{
			if(($this->balance)<$amount)
			{
				echo "money less then withdraw money so you do not withdraw a money";
			}
			else
			{
				echo "remain balance is:- ".$this->balance = $this->balance - $amount;
			}	
	}
}

//create instance of class
$value = new BankAcc;
//display balance
echo $value->DisplayDetail();
//withdraw
$value = new BankAcc; 

echo $value->Withdraw(50);

?>
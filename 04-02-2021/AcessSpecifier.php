<?php



/**
 * 
 */
/*
//public Acessspecifier
class BankAcc
{
	public $balance = 200;

	public function DisplayDetail()//this function only execute within a class
	{
		return "Balace is ".$this->balance.'<br>';
	}
	
}

$value = new BankAcc;
echo $value->DisplayDetail();

*/

//private Acessspecifier

class BankAcc
{
	private $balance = 200;

	public function DisplayDetail()//this function only execute within a class
	{
		return "Balace is ".$this->balance.'<br>';
	}
	
}

value = new BankAcc;
echo $value->DisplayDetail();//its work

echo $value->balance;//its not work because i have call it out side the class
*/
/*
//protected AcessSpecifier
class BankAcc
{
	protected $balance = 200;

	public function DisplayDetail()//this function only execute within a class
	{
		return "Balace is ".$this->balance.'<br>';
	}
	
}

$value = new BankAcc;
echo $value->DisplayDetail();//its work 

*/

?>
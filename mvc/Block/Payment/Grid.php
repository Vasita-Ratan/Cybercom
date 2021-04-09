<?php


/**
 * 
 */
class Block_Payment_Grid extends Block_Core_Template
{
	protected $payments = [];
	function __construct()
	{
		parent::__construct();
		$this->setTemplate('View/payment/grid.php');
		$this->setPayments();
	}

	public function setPayments($payments = null)
    {
    	$payments = Mage::getModel('Model_Payment');
    	$payments = $payments->fetchAll();
        $this->payments = $payments;
        return $this;
    }

    public function getPayments()
    {	

        if (!$this->payments) 
        {
           $this->setPayments();

        }
        return $this->payments;
    }

    public function getTitle()
    {
        return "Manage Payments";
    }

}

?>
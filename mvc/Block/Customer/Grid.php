<?php


/**
 * 
 */
class Block_Customer_Grid extends Block_Core_Template
{
	protected $customers = [];
	function __construct()
	{
		parent::__construct();
		$this->setTemplate('./View/customer/grid.php');
		$this->setCustomers();
	}

	public function setCustomers($customers = null)
    {
    	$customers = Mage::getModel('Model_Customer');
    	$customers = $customers->fetchAll();
        $this->customers = $customers;
        return $this;
    }

    public function getCustomers()
    {	
        return $this->customers;
    }

}

?>
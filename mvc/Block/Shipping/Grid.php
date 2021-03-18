<?php


/**
 * 
 */
class Block_Shipping_Grid extends Block_Core_Template
{
	protected $shippings = [];
	function __construct()
	{
		parent::__construct();
		$this->setTemplate('./View/shipping/grid.php');
		$this->setShippings();
	}

	public function setShippings($shippings = null)
    {
    	$shippings = Mage::getModel('Model_Shipping');
    	$shippings = $shippings->fetchAll();
        $this->shippings = $shippings;
        return $this;
    }

    public function getShippings()
    {	
        return $this->Shippings;
    }

}

?>
<?php


/**
 * 
 */
class Block_Product_Grid extends Block_Core_Template
{
	protected $products = [];
	function __construct()
	{
		parent::__construct();
		$this->setTemplate('./View/product/grid.php');
		$this->setProducts();
	}

	public function setProducts($products = null)
    {
    	$products = Mage::getModel('Model_Product');
    	$products = $products->fetchAll();
        $this->customers = $products;
        return $this;
    }

    public function getProducts()
    {	
        return $this->products;
    }

}

?>
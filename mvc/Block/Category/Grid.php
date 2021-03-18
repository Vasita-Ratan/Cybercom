<?php


/**
 * 
 */
class Block_Category_Grid extends Block_Core_Template
{
	protected $categories = [];
	function __construct()
	{
		parent::__construct();
		$this->setTemplate('./View/category/grid.php');
		$this->setCategories();
	}

	public function setCategories($categories = null)
    {
    	$categories = Mage::getModel('Model_Category');
    	$categories = $categories->fetchAll();
        $this->categories = $categories;
        return $this;
    }

    public function getCategories()
    {	
        return $this->categories;
    }

}

?>
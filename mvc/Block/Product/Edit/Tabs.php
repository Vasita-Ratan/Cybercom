<?php 

Mage::loadFileByClassName('Block_Core_Tabs');
class Block_Product_Edit_Tabs extends Block_Core_Tabs
{
	function __construct()
	{
		parent::__construct();
		$this->setTemplate('View/product/edit/tabs.php');
		$this->prepareTab();
		$this->setDefaultTab('product','media');

	}

	public function prepareTab()
	{
		$this->addTab('product',['label'=>'product information','block'=>'Block_Product_Edit_Tabs_Form']);
		$this->addTab('media',['label'=>'product media','block'=>'Block_Product_Edit_Tabs_Media']);

	}

}

 ?>


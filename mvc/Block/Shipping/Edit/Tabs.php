<?php 

Mage::loadFileByClassName('Block_Core_Tabs');
class Block_Shipping_Edit_Tabs extends Block_Core_Tabs
{
	function __construct()
	{

		parent::__construct();
		$this->setTemplate('View/shipping/edit/tabs.php');
		$this->prepareTab();
		$this->setDefaultTab('shipping');

	}

	public function prepareTab()
	{
		$this->addTab('shipping',['label'=>'shipping information','block' =>'Block_shipping_Edit_Tabs_Form']);
		// $this->addTab('shipping1',['label'=>'shipping information1','block'=>'Block_shipping_Edit_Tabs_Form1']);

	}

	

}

 ?>
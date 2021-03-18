<?php 

Mage::loadFileByClassName('Block_Core_Tabs');
class Block_Customer_Edit_Tabs extends Block_Core_Tabs
{
	

	function __construct()
	{
		parent::__construct();
		$this->setTemplate('View/customer/edit/tabs.php');
		$this->prepareTab();
		$this->setDefaultTab('customer');

	}

	public function prepareTab()
	{
		$this->addTab('customer',['label'=>'customer information','block'=>'Block_Customer_Edit_Tabs_Form']);
		// $this->addTab('customer1',['label'=>'customer information1','block'=>'Block_Customer_Edit_Tabs_Form1']);

	}


}

 ?>
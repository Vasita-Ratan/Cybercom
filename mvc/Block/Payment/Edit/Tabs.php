<?php 

Mage::loadFileByClassName('Block_Core_Tabs');
class Block_Payment_Edit_Tabs extends Block_Core_Tabs
{
	
	public function __construct()
	{
		parent::__construct();
		$this->setTemplate('View/payment/edit/tabs.php');
		$this->prepareTab();
		$this->setDefaultTab('payment');

	}

	public function prepareTab()
	{
		$this->addTab('payment',['label'=>'payment information','block'=>'Block_Payment_Edit_Tabs_Form']);
		// $this->addTab('payment1',['label'=>'payment information1','block'=>'Block_Category_Edit_Tabs_Form1']);

	}

	


}

 ?>
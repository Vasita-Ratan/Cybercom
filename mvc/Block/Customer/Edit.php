<?php 

Mage::loadFileByClassName('Block_Core_Template');
class Block_Customer_Edit extends Block_Core_Template
{
	
	public function __construct()
	{
		parent::__construct();
		$this->setTemplate('View/customer/edit.php');
				 
	}

	public function getTabContent()
	{
		$tabBlock = Mage::getBlock('Block_Customer_Edit_Tabs');
		$tabs = $tabBlock->getTabs();
		$tab = $this->getUrl()->getRequest()->getGet('tab',$tabBlock->getDefaultTab());
		if (!array_key_exists($tab, $tabs))
		 {
			$tab = $tabBlock->getDefaultTab();
		}
		return \Mage::getBlock($tabs[$tab]['block']);
	}



}

 ?>
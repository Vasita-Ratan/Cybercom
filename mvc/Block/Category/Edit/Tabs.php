<?php 

Mage::loadFileByClassName('Block_Core_Tabs');
class Block_Category_Edit_Tabs extends Block_Core_Tabs
{
	function __construct()
	{

		$this->setTemplate('View/category/edit/tabs.php');
		$this->prepareTab();
		$this->setDefaultTab('category');

	}

	public function prepareTab()
	{
		$this->addTab('category',['label'=>'category information','block'=>'Block_Category_Edit_Tabs_Form']);
		// $this->addTab('category1',['label'=>'category information1','block'=>'Block_Category_Edit_Tabs_Form1']);

	}

}

 ?>
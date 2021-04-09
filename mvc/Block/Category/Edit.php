<?php

Mage::loadClassByFileName('Block_Core_Template');

class Block_Category_Edit extends Block_Core_Template
{
    protected $categories = null;

    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('View/category/edit.php');
    }

    public function getTabContent()
    {
        $tabsObj = Mage::getBlock("Block_Category_Edit_Tabs");
        $tabs = $tabsObj->getTabs();
        $fetchTab = $this->getRequest()->getGet('tab');
        if (!array_key_exists($fetchTab, $tabs)) {
            $fetchTab = $tabsObj->getDefault();
        }
        $gotTab = Mage::getBlock($tabs[$fetchTab]['className']);
        echo $gotTab->toHtml();
    }

    
    
}

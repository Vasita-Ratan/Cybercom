<?php

Mage::loadClassByFileName('Block_Core_Template');

class Block_CustomerGroup_Edit extends Block_Core_Template
{
    protected $groups = null;

    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('View/customerGroup/edit.php');
    }

    public function getTabContent()
    {
        $tabsObj = Mage::getBlock("Block_CustomerGroup_Edit_tabs");
        $tabs = $tabsObj->getTabs();
        $fetchTab = $this->getRequest()->getGet('tab');
        if (!array_key_exists($fetchTab, $tabs)) {
            $fetchTab = $tabsObj->getDefault();
        }
        $gotTab = Mage::getBlock($tabs[$fetchTab]['className']);
        echo $gotTab->toHtml();
    }
}

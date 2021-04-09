<?php

Mage::loadClassByFileName('Block_Core_Template');

class Block_Shipping_Edit extends Block_Core_Template
{
    protected $shipments = null;

    public function __construct()
    {

        $this->setTemplate('View/shipping/edit.php');
    }

    public function getTabContent()
    {
        $tabsObj = Mage::getBlock("Block_Shipping_Edit_Tabs");
        $tabs = $tabsObj->getTabs();
        $fetchTab = $this->getRequest()->getGet('tab');
        if (!array_key_exists($fetchTab, $tabs)) {
            $fetchTab = $tabsObj->getDefault();
        }
        $gotTab = Mage::getBlock($tabs[$fetchTab]['className']);
        echo $gotTab->toHtml();
    }
}

?>
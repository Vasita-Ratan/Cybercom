<?php

Mage::loadClassByFileName('Block_Core_Template');

class Block_Payment_Edit extends Block_Core_Template
{
    protected $payments = null;

    public function __construct()
    {
        $this->setTemplate('View/payment/edit.php');
    }

    public function getTabContent()
    {
        $tabsObj = Mage::getBlock("Block_Payment_Edit_Tabs");
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

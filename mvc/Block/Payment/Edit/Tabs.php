<?php

Mage::loadClassByFileName("Block_Core_Form_Tabs");
class Block_Payment_Edit_Tabs extends Block_Core_Form_Tabs
{

    protected $tabs = [];
    protected $default = null;
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate("View/payment/edit/tabs.php");
        $this->prepareTab();
    }

    public function prepareTab()
    {
        $this->addTab('payment', ["label" => "Payment Information", "className" => 'Block_Payment_Edit_Tabs_Form']);
        $this->setDefault('payment');
    }
}

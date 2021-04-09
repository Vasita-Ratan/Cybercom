<?php

Mage::loadClassByFileName("Block_Core_Form_Tabs");
class Block_Shipping_Edit_Tabs extends Block_Core_Form_Tabs
{

    protected $tabs = [];
    protected $default = null;
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate("View/shipping/edit/tabs.php");
        $this->prepareTab();
    }

    public function prepareTab()
    {
        $this->addTab('shipping', ["label" => "Shipping Information", "className" => 'Block_Shipping_Edit_Tabs_Form']);
        $this->setDefault('shipping');
    }
}

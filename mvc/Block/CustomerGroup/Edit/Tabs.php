<?php

Mage::loadClassByFileName("Block_Core_Form_Tabs");
class Block_CustomerGroup_Form_Tabs extends Block_Core_Form_Tabs
{

    protected $tabs = [];
    protected $default = null;
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate("View/customerGroup/edit/tabs.php");
        $this->prepareTab();
    }

    public function prepareTab()
    {
        $this->addTab('customerGroup', ["label" => "Customer Group Information", "className" => 'Block_customerGroup_Edit_Tabs_Form']);

        $this->setDefault('customerGroup');
    }
}

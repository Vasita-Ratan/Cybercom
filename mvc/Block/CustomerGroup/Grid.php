<?php


Mage::loadClassByFileName('Block_Core_Template');

class Block_CustomerGroup_Grid extends Block_Core_Template{

    protected $customerGroups = null;
    public function __construct()
    {
        $this->setTemplate('View/customerGroup/grid.php');
        
    }

    public function setCustomerGroups($customerGroups = null)
    {
        if (!$customerGroups) {
            $customerGroups = Mage::getModel("Model_CustomerGroup");
            $customerGroups = $customerGroups->fetchAll();
        }
        $this->customerGroups = $customerGroups;
        return $this;
    }
    public function getCustomerGroups()
    {
        if (!$this->customerGroups) {
            $this->setCustomerGroups();
            
        }
        return $this->customerGroups;     
    }
    public function getTitle()
    {
        return "Manage Customer Group";
    }

}

<?php

Mage::loadClassByFileName("Block_Core_Template");
class Block_CustomerGroup_Edit_Tabs_Form extends Block_Core_Template
{
    protected $customerGroup = null;
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate("View/customerGroup/edit/tabs/form.php");
    }

    public function setCustomerGroup($customerGroup = null)
    {
        if (!$customerGroup) {
            $customerGroup = Mage::getModel("Model_CustomerGroup");
            if ($id = $this->getRequest()->getGet('id')) {
                $customerGroup = $customerGroup->load($id);
                if (!$customerGroup) {
                    return null;
                }
            }
        }
        $this->customerGroup = $customerGroup;
        return $this;
    }

    public function getCustomerGroup()
    {
        if (!$this->customerGroup) {
            $this->setcustomerGroup();
        }
        return $this->customerGroup;
    }
}

<?php

Mage::loadClassByFileName("block_core_template");
class Block_Customer_Edit_Tabs_CustomerAddress extends Block_Core_Template
{

    public function __construct()
    {
        parent::__construct();
        $this->setTemplate("View/customer/edit/tabs/customerAddress.php");
    }

    public function validCustomer()
    {
        $id = $this->getRequest()->getGet('id');
        $customers = Mage::getModel("Model_Customer");
        $customer = $customers->load($id);
        if ($customer) {
            return true;
        }
        return false;
    }

    public function setCustomerAddress($customers = null)
    {
        if (!$customers) {
            $customers = Mage::getModel("Model_Customer");
            if ($id = $this->getRequest()->getGet('id')) {
                $customer = $customers->load($id);
                if (!$customer) {
                    return null;
                }
            }
        }
        $this->customers = $customers;
        return $this;
    }
    public function getCustomerAddress()
    {
        if (!$this->customers) {
            $this->setCustomerAddress();
        }
        return $this->customers;
    }
    public function getAddressData($id, $type)
    {
        $customerAddress = Mage::getModel("Model_CustomerAddress");
        $query = "SELECT * from customer_address where customerId = {$id} and addressType='{$type}'";
        if(!$customerAddress->fetchAll($query)){
            return $customerAddress;
        }
        return $customerAddress->fetchAll($query)->getData()[0];
    }
}

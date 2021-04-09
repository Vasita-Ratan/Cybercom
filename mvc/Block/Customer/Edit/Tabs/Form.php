<?php

Mage::loadClassByFileName("Block_Core_Template");
class Block_Customer_Edit_Tabs_Form extends Block_Core_Template{
    
    protected $customer = null;
    protected $customerGroupOptions = [];

    public function __construct()
    {
        parent::__construct();
        $this->setTemplate("View/customer/edit/tabs/form.php");
    }


    public function setCustomer($customer = null)
    {
        if (!$customer) 
        {
            $customer = Mage::getModel("Model_Customer");
            if ($id = $this->getRequest()->getGet('id')) 
            {
                $customer = $customer->load($id);
                if (!$customer) {
                    return null;
                }
            }  
        }
        $this->customers = $customer;
        return $this;
    }
    public function getCustomer()
    {
        if (!$this->customers) {
            $this->setCustomers();
        }
        return $this->customers;     
    }

    public function getCustomerGroupOptions(){

        // if(!$this->customerGroupOptions){
        //     $query = "select `group_id`,`name` from customer_group";
        //     $this->customerGroupOptions = $this->getCustomer()->getAdapter()->fetchPairs($query);
        // }
          
        //     return $this->customerGroupOptions;

    }
    }



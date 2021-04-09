<?php

Mage::loadClassByFileName("Block_Core_Template");
class Block_Admin_Form_Tabs_Form extends Block_Core_Template
{
    protected $admins = null;
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate("./admin/edit/tabs/form.php");
    }

    public function setAdmin($admins = null)
    {
        if (!$admins) {
            $admins = Mage::getModel("Model_AdminModel");
           
            if ($id = $this->getRequest()->getGet('id')) {
                $admin = $admins->load($id);
                if (!$admin) {
                    return null;
                }
            }
            
        }
       
       
        $this->admins = $admins;
        
        return $this;
    }

    public function getAdmin()
    {
        if (!$this->admins) {
            $this->setAdmin();
        }
        return $this->admins;
    }
}

<?php


Mage::loadClassByFileName("Block_Core_Template");

class Block_Attribute_Edit_Tabs_Form extends Block_Core_Template
{
    protected $attributes;
    public function __construct()
    {
        $this->setTemplate("View/attribute/edit/tabs/form.php");
    }

    public function setAttributes($attributes = null)
    {
        if (!$attributes) {
            if ($id = $this->getRequest()->getGet('id')) {
                $attributes = Mage::getModel("Model_Attribute");
                $attribute = $attributes->load($id);
                if (!$attribute) {
                    return null;
                }
            }else{
            $attributes = Mage::getModel("Model_Attribute");
        }
    }
        
        
        $this->attributes = $attributes;
       
        return $this;
    }
    
    public function getAttributes()
    {
        if (!$this->attributes) {
            $this->setAttributes();
        }
        return $this->attributes;
    }
}

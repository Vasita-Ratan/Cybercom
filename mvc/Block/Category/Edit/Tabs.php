<?php

Mage::loadClassByFileName("Block_Core_Template");
class Block_Category_Edit_Tabs extends Block_Core_Template{

    protected $tabs = [];
    protected $default = null;
    public function __construct()
    {
        $this->setTemplate("View/category/edit/tabs.php");
        $this->prepareTab();
    }

    public function prepareTab()
    {
        $this->addTab('category',["label"=>"Category Information","className"=>'Block_Category_Edit_Tabs_Form']);
        if ($this->getRequest()->getGet('id')) {
            $this->addTab('attribute', ["label" => "Attribute", "className" => 'Block_Category_Edit_Tabs_Attribute']);

        }
        
        $this->setDefault('category');
    }

    public function setDefault($key)
    {
        $this->default = $key;
        return $this;
    }

    public function getDefault()
    {
        return $this->default;
    }

    public function setTabs(array $tabs)
    {
        $this->tabs = $tabs;
        return $this;
    }

    public function getTabs()
    {
        return $this->tabs;
    }
    
    public function addTab($key,$tabs = [])
    {
                      
        $this->tabs[$key] = $tabs;
        return $this;
    }
    
    public function removeTab($key)
    {
        if(!array_key_exists($key,$this->tabs)){
            return null;
        }
        unset($this->tabs[$key]);
        return $this;
    }
    
    public function getTab($key)
    {
        if(!array_key_exists($key,$this->tabs)){
            return null;
        }
        return $this->tabs[$key]; 
    }
    
}

?>
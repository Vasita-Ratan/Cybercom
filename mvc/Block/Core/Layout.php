<?php

Mage::loadClassByFileName('Block_Core_Template');

class Block_Core_Layout extends Block_Core_Template{
    public function __construct()
    {
        $this->setTemplate("View/core/layout/two_column_leftBar.php");
        $this->prepareChildren();
    }
    public function prepareChildren()
    {
        $sidebar = Mage::getBlock("Block_Core_Layout_Sidebar");
        $this->addChild($sidebar,"Sidebar");
        
        $header = Mage::getBlock("Block_Core_Layout_Header");
        $this->addChild($header,"Header");
        
        $footer = Mage::getBlock("Block_Core_Layout_Footer");
        $this->addChild($footer,"Footer");
        
        $content = Mage::getBlock("Block_Core_Layout_Content");
        $this->addChild($content,"Content");

    }
    
}

?>
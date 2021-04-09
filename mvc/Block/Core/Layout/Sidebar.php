<?php

Mage::loadClassByFileName("Block_Core_Template");

class Block_Core_Layout_Sidebar extends Block_Core_Template
{
    public function __construct()
    {
        $this->setTemplate("View/core/layout/sidebar.php");
    }    
}

?>
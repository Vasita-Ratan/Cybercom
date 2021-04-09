<?php

Mage::loadClassByFileName("Block_Core_Template");

class Block_Core_Layout_Message extends Block_Core_Template
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate("View/core/layout/message.php");
    }    
}

?>
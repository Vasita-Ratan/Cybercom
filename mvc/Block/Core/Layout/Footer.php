<?php

Mage::loadClassByFileName("Block_Core_Template");

class Block_Core_Layout_Footer extends Block_Core_Template
{
    public function __construct()
    {
        $this->setTemplate("View/core/layout/footer.php");
    }    
}

?>
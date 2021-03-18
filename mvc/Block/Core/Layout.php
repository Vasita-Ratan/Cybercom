<?php


Mage::loadFileByClassName('Block_Core_Template');
Mage::loadFileByClassName('Block_Core_Layout_Header');
Mage::loadFileByClassName('Block_Core_Layout_Left');
Mage::loadFileByClassName('Block_Core_Layout_Content');
Mage::loadFileByClassName('Block_Core_Layout_Right');
Mage::loadFileByClassName('Block_Core_Layout_Footer');

class Block_Core_Layout extends Block_Core_Template
{
    public function __construct()
    {
        $this->setTemplate("View/core/layout/oneColumn.php");
        $this->prepareChildren();
    }
    
    public function prepareChildren()
    {
    	$this->addChild(new Block_Core_Layout_Header(), 'header');
        $this->addChild(new Block_Core_Layout_Left(), 'left');
    	$this->addChild(new Block_Core_Layout_Content(), 'content');
        $this->addChild(new Block_Core_Layout_Right(), 'right');
    	$this->addChild(new Block_Core_Layout_Footer(), 'footer');
    }
    

}
?>
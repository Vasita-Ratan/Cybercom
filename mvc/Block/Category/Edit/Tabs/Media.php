<?php

Mage::loadClassByFileName("Block_Core_Template");
class Block_Category_Edit_Tabs_Media extends Block_Core_Template{

    public function __construct()
    {
        $this->setTemplate("View/category/edit/tabs/media.php");
    }

}
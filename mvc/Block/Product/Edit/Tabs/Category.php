<?php

Mage::loadClassByFileName("Block_Core_Template");
class Block_Product_Edit_Tabs_Category extends Block_Core_Template{

    public function __construct()
    {
        $this->setTemplate("View/product/edit/tabs/category.php");
    }

}


?>
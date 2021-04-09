<?php

Mage::loadClassByFileName("Block_Core_Template");
class Block_Product_Edit_Tabs_Media extends Block_Core_Template
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate("View/product/edit/tabs/media.php");
    }

    public function getMedia($id)
    {
        $media = Mage::getModel("Model_Media");
        $query = "select * from `media` where `productId` =" . $id;
        $media = $media->fetchAll($query);
        return $media;
    }
}

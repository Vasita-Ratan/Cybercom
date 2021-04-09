<?php

Mage::loadClassByFileName("Block_Core_Template");
class Block_Product_Edit_Tabs_Form extends Block_Core_Template{
    protected $products = null;
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate("View/product/edit/tabs/form.php");
    }

    public function setProducts($products = null)
    {
        if (!$products) 
        {
            $products = Mage::getModel("Model_Product");
            if ($id = $this->getRequest()->getGet('id')) 
            {
                $product = $products->load($id);
                if (!$product) {
                    return null;
                }
            }  
        }
        $this->products = $products;
        return $this;
    }

    public function getProducts()
    {
        if (!$this->products) {
            $this->setProducts();
        }
        return $this->products;     
    }  

}

?>
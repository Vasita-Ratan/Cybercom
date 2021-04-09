<?php



Mage::loadClassByFileName("Block_Core_Template");
class Block_Product_Edit_Tabs_Attribute extends Block_Core_Template
{
    protected $products = null;
    protected $attributes = null;
    public function __construct()
    {
        $this->setTemplate("View/product/edit/tabs/attribute.php");
    }

    public function setProducts($products = null)
    {
        if (!$products) {
            $products = Mage::getModel("Model_Product");
            if ($id = $this->getRequest()->getGet('id')) {
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


    public function getAttributes()
    {
        $attribute = Mage::getModel("Model_Attribute");
        $query = "select * from attribute where entityTypeId='product' ORDER BY sortOrder";
        $attributes = $attribute->fetchAll($query);
        
        
        return $attributes;
       
    }

    public function getOptions($id)
    {
        $option = Mage::getModel("Model_Attribute_Option");

        $query = "select * from attributeoptions where attributeId='{$id}' ORDER BY sortOrder;";
        $options = $option->fetchAll($query);

        return $options;
    }
}
?>
<?php



Mage::loadClassByFileName("Block_Core_Template");
class Block_Category_Edit_Tabs_Attribute extends Block_Core_Template
{
    protected $attributes = null;
    public function __construct()
    {
        $this->setTemplate("View/category/edit/tabs/attribute.php");
    }

    public function setAttributes($attributes = null)
    {
        if (! $attributes) {
             $attributes = Mage::getModel("Model_Attribute");
            if ($id = $this->getRequest()->getGet('id')) {
                $attribute =  $attributes->load($id);
                if (! $attribute) {
                    return null;
                }
            }
        }
        $this->attributes =  $attributes;
        return $this;
    }

    public function getAttributes()
    {
        if (!$this->attributes) {
            $this->setAttributes();
        }
        return $this->attributes;
    }


    // public function getAttributes()
    // {
    //     echo "lskdl";
    //     die();
    //     // $attribute = Mage::getModel("Model_Attribute");
    //     // $query = "select * from attribute where entityTypeId='category' ORDER BY sortOrder";
    //     // $attributes = $attribute->fetchAll($query);
        
        
    //     return $attributes;
       
    // }

    public function getOptions($id)
    {
        $option = Mage::getModel("Model_AttributeModel_OptionModel");

        $query = "select * from attributeoptions where attributeId='{$id}' ORDER BY sortOrder;";
        $options = $option->fetchAll($query);

        return $options;
    }
}

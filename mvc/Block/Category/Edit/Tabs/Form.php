<?php

Mage::loadClassByFileName("Block_Core_Template");
class Block_Category_Edit_Tabs_Form extends Block_Core_Template
{
    protected $category = null;
    protected $categoryOptions = [];

    public function __construct()
    {
        parent::__construct();
        $this->setTemplate("View/category/edit/tabs/form.php");
    }

    public function setCategory($category = null)
    {
        if (!$category == null)
         {
            $category = Mage::getModel("Model_Category");
         }       
    }
    $this->category = $category;
    return $this;
    }
    public function getCategory()
    {

        if (!$this->category) {


            $this->setCategory();   
        }
       
        return $this->category;
    }

    public function getCategoryOptions()
    {
        if (!$this->categoryOptions) {

            $category = Mage::getModel('Model_Category');
             $query = "SELECT `categoryId`,`name` FROM {$category->getTableName()}";

            $options = $category->getAdapter()->fetchPairs($query);
             $query = "SELECT `categoryId`,`pathId` FROM {$category->getTableName()} ORDER BY `pathId` ASC";
            
            $categoryOptions = $category->getAdapter()->fetchPairs($query);

            if($categoryOptions)
            {
                foreach ($categoryOptions as $categoryId => &$pathId)
                 {
                        $pathIds = explode("=", $pathId);
                        foreach ($pathIds as $key => &$id) 
                        {
                            if (array_key_exists($id, $options)) 
                            {
                                $id = $options[$id];
                            }
                        }
                    $pathId = implode("=>", $pathIds);
                }
            }
            
                $this->categoryOptions = ["" => "Root Category"] + $categoryOptions;
              
        }
       
        return $this->categoryOptions;
    }
}

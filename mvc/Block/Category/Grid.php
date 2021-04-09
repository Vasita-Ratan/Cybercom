<?php


Mage::loadClassByFileName('Block_Core_Template');

class Block_Category_Grid extends Block_Core_Template
{

    protected $categories = [];
    protected $categoryOptions = [];

    public function __construct()
    {
        $this->setTemplate('View/category/grid.php');
    }

    public function setCategories($categories = null)
    {
        if (!$categories) {
            $categories = Mage::getModel("Model_Category")->fetchAll();
        }
        $this->categories = $categories;
        return $this;
    }

    public function getCategories()
    {
        if (!$this->categories) {
            $this->setCategories();
        }
        return $this->categories;
        
    }



    public function getTitle()
    {
        return "Manage Categories";
    }

    public function getName($categories)
    {  
       
        $category = Mage::getModel('Model_Category');
        if (!$this->categoryOptions) {
           
            $query = "SELECT `categoryId`,`name` FROM `{$category->getTableName()}`";
            $this->categoryOptions = $category->getAdapter()->fetchPairs($query);
           
           
        }
      
        $pathids = explode("=", $category->pathId);
        
        // print_r($this->categoryOptions);
        foreach ($pathids as $key => &$id) {
            if (array_key_exists($id, $this->categoryOptions)) {
                $id = $this->categoryOptions[$id];
            }
        }
        $name = implode("/", $pathids);
        
        return $name;
    }
}

<?php

Mage::loadFileByClassName('Controller_Core_Admin');
Mage::loadFileByClassName('Block_Core_Layout');
Mage::loadFileByClassName('Model_Core_Adapter');


class Controller_Category extends Controller_Core_Admin
{
    
    protected $categories = [];

    public function __construct()
    {
        parent:: __construct();
    }
       
    public function setCategories($categories)
    {
        $this->categories = $categories;
        return $this;
    }

    public function getCategories()
    {
        return $this->categories;
    }

    public function layoutAction()
    {
        
        $layout = $this->getLayout(); 
        $gridBlock = Mage::getBlock('Block_Category_Grid');
        $layout->getChild('content');
        $this->renderLayout();  
    }

    public function gridAction()
    {
       
        try
        {

            // $layout = $this->getLayout();
            // $content = $layout->getChild('content');
            // $categorygrid = Mage::getBlock('Block_Category_Grid');
            // $content->addChild($categorygrid,'content');
            // $this->renderLayout();
             $category = Mage::getModel('Model_Category');
            $this->setCategories( $category->fetchAll());
            require_once 'View/category/grid.php';
        } 
        catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }

    public function formAction()
    {
    
        try
        {

            $layout = $this->getLayout();
            $layout->setTemplate('View/core/layout/threeColumn.php');
            $left = $layout->getChild('left');
            $lefttab = Mage::getBlock('Block_Category_Edit_Tabs');
            $left->addChild($lefttab);
            $content = $layout->getChild('content');
            $categorygrid = Mage::getBlock('Block_Category_Edit');
            $content->addChild($categorygrid);
            $this->renderLayout();
            
        }
        catch(Exception $e)
        {
            echo $e->getMessage();
            die();
        }
    }
    public function saveAction()
    {       
        try {
             if (!$this->getRequest()->isPost()) {
                throw new Exception("Invalid Request.");
                }
                $category = Mage::getModel('Model_Category');
                $postData = $this->getRequest()->getPost('category');
                if ($categoryId = $this->getRequest()->getGet('id')) {
                    if (!$category->load($categoryId)) {
                        throw new Exception("Something went wrong.");
                   
                    }
                        $postData['categoryId'] = $categoryId;
                        // $postData['updatedDate'] = date("Y-m-d H:i:s");
                } else {
                   // $postData['createdDate'] = date("Y-m-d H:i:s");
                }
                
                $category->setData($postData);
                if (!$category->save()) {
                throw new Exception("Something went wrong.");
                }
                $this->redirect('grid',null,null,true);
        } 
        catch (Exception $e) {
            echo $e->getmessage();
            die();
        }
    }

    public function deleteAction()
    {
        try{
            $categoryId = (int) $this->getRequest()->getGet('id');
            if (!$categoryId) {
                
                throw new Exception("Error Processing Request");

            }
            $category = Mage::getModel('Model_Category');
            if (!$category->delete($categoryId)) {
                throw new Exception("Something went wrong.");
            }
            $this->redirect('grid', null, null, true);
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function testAction()
    {
        $category = Mage::getModel('Model_Category');
        $category->name = 'Ratan';
        $category->number = 123;
    }
}

?>

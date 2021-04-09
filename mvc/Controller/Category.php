<?php

Mage::loadClassByFileName('Controller_Core_Admin');

class Controller_Category extends Controller_Core_Admin
{

    public function __construct()
    {
        parent::__construct();
    }

    public function gridAction()
    {
        $gridBlock = Mage::getBlock("Block_Category_Grid")->setCategories();
        $layout = $this->getLayout();
        $layout->setTemplate("View/core/layout/one_column.php");    
        $layout->getChild("Content")->addChild($gridBlock, 'Grid');

        $this->renderLayout();
    }

    public function editAction()
    {
        try {
            if (!($id = $this->getRequest()->getGet('id'))) {
                throw new Exception("Id Not Found", 1);
            }

            $layout = $this->getLayout();

            $categoryTab = Mage::getBlock("Block_Category_Edit_tabs");
            $layout->getChild('Sidebar')->addChild($categoryTab, 'Tab');

            $form = Mage::getBlock('Block_Category_Edit');
            $layout->getChild('Content')->addChild($form, 'Grid');

            $this->renderLayout();
        } catch (Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
            $this->redirect('grid');
        }
    }

    public function formAction()
    {
        $layout = $this->getLayout();

        $categoryTab = Mage::getBlock("Block_Category_Edit_tabs");
        $layout->getChild('Sidebar')->addChild($categoryTab, 'Tab');

        $form = Mage::getBlock('Block_Category_Edit');
        $layout->getChild('Content')->addChild($form, 'Grid');
        $this->renderLayout();
    }

    public function saveAction()
    // if (!$this->getRequest()->isPost()) {
    //     throw new \Exception("Invalid Request.");
    // }
    // $postData = $this->getRequest()->getPost('category');
    // $category = \Mage::getModel('Model\Category');
    // if ($categoryId = $this->getRequest()->getGet('id')) {
    //     if (!$category->load($categoryId)) {
    //         throw new \Exception("Id is invalid.");
    //     }
    // }
    // $categoryPathId = $category->pathId.'/';
    
    // $category->setData($postData);
    // if (!$category->save()) {
    //     throw new \Exception("Something went wrong.");
    // }

    {
        try {
              
            $postData = $this->getRequest()->getPost('category');
            $cat = Mage::getModel('Model_Category');  
            $cat->setData($postData);
            
            
            if ($id = $this->getRequest()->getGet('id')) {
                $cat = $cat->load($id);
               
               
                if (!$cat) {
                    throw new Exception('Please Enter Valid ID');
                }
               
                $this->getMessage()->setSuccess('Record Updated Successfully.....');
                
            } else {
                
                $this->getMessage()->setSuccess('Record Inserted Successfully.....');
            }
            $cat->save();
            $categoryPathId = $cat->pathId;  
            $cat->updatePathId($cat);
            $cat->updateChildrenPathIds($categoryPathId);
        } 
        catch (Exception $e) 
        {
            $this->getMessage()->setFailure($e->getMessage());
            $this->redirect('grid', null, [], true);
        }
        $this->redirect('grid', null, [], true);
    }

    public function changeStatusAction()
    {
        try {
            $id = $this->getRequest()->getGet('id');
            $status = $this->getRequest()->getGet('status');
            $model = Mage::getModel('Model_Category');
            $model->id = $id;
            $model->status = $status;
            $model->changeStatus();
            if ($model->changeStatus()) {
                $this->getMessage()->setSuccess("Status Changed Successfully");
            }
        } catch (Exception $e) {
            $this->getMessage()->setSuccess($e->getMessage());
        }
        $this->redirect('grid', null, null, true);
    }
    public function deleteAction()
    {
        try {
            $category = Mage::getModel('Model_Category');
            if ($id = $this->getRequest()->getGet('id')) {
                $category = $category->load($id);
                if (!$category) {
                    throw new Exception("Invalid ID");
                }
            }
            $parentId = $category->parentId;
            $pathId = $category->pathId;
            $category->updateChildrenPathIds($pathId, $parentId);
            $category->id = $category->categoryId;
            $category->delete();
        } catch (Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
        }
        $this->redirect('grid');
    }
}

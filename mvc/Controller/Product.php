<?php

Mage::loadClassByFileName('Controller_Core_Admin');

class Controller_Product extends Controller_Core_Admin
{

    public function __construct()
    {
        parent::__construct();
    }

    public function gridAction()
    {
        $gridBlock = Mage::getBlock("Block_Product_Grid")->setProducts();
        $layout = $this->getLayout();
        $layout->setTemplate("View/core/layout/one_column.php");
        $layout->getChild("Content")->addChild($gridBlock, 'Grid');
        $this->renderLayout();
    }
    public function formAction()
    {
    

         $layout = $this->getLayout();
         $productTab = Mage::getBlock("Block_Product_Edit_tabs");
         $layout->getChild('Sidebar')->addChild($productTab, 'Tab');
        $form = Mage::getBlock('Block_Product_Edit');
        $layout->getChild('Content')->addChild($form, 'Grid');
        $this->renderLayout();
    }

    public function saveAction()
    {
        try 
        {
            $product = Mage::getModel("Model_Product");
            if (!$this->getRequest()->isPost()) {
                throw new Exception("Invalid Post Request", 1);
            }
            $productId = $this->getRequest()->getGet('id');

            if (!$productId) {
                date_default_timezone_set('Asia/Kolkata');
                $product->createdDate = date("Y-m-d H:i:s");

                $this->getMessage()->setSuccess("Product Inserted SuccessFully !!");
            } else {
                $product =  $product->load($productId);
                if (!$product) 
                {
                    throw new Exception("Data Not Found", 1);
                }
                date_default_timezone_set('Asia/Kolkata');
                $product->updatedDate = date("y-m-d h:i:s");
                $product->productId = $productId;

                $this->getMessage()->setSuccess("Product Updated SuccessFully !!");
            }

            $productData = $this->getRequest()->getPost('product');

            if (!array_key_exists('status', $productData)) {
                $productData['status'] = 0;
            } else {
                $productData['status'] = 1;
            }

            $product->setData($productData);
            $product->save();
        } catch (Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
        }
        $this->redirect('grid', null, null, true);
    }
    public function changeStatusAction()
    {
        try {

            $id = $this->getRequest()->getGet('id');
            $status = $this->getRequest()->getGet('status');
            $model = Mage::getModel('Model_Product');
            $model->id = $id;
            $model->status = $status;
            if ($model->changeStatus()) {
                $this->getMessage()->setSuccess("Status Changed Successfully");
            }
        } catch (Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
        }
        $this->redirect('grid', null, null, true);
    }
    public function deleteAction()
    {
        try {
            if ($this->request->isPost()) {
                throw new Exception("Invalid Request", 1);
            }

            $id = $this->getRequest()->getGet('id');
            $delModel = Mage::getModel('Model_Product');
            $delModel->id = $id;

            //Delete photos from directory
            $query = "SELECT imageName from media where productId=$id";
           
            $Media = Mage::getModel('Model_Media');
            $filenames = $Media->fetchAll($query);
            if($filenames){
            foreach ($filenames->getData() as $key => $value) {
                
                unlink(getcwd()."\Skin\admin\images\\{$id}\\{$value->imageName}");
            }
            }
            $delModel->delete();

            if ($delModel->delete()) {
                $this->getMessage()->setSuccess("Product Deleted SuccessFully !!");
            } else {
                $this->getMessage()->setFailure("Error While Deleting Data!!");
            }
        } catch (Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
            die();
        }
        $this->redirect('grid', null, null, true);
    }
}

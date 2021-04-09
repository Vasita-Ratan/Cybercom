<?php

Mage::loadClassByFileName('Controller_Core_Admin');



class Controller_Shipping extends Controller_Core_Admin
{

    public function __construct()
    {
        parent::__construct();
    }



    public function gridAction()
    {


        $gridBlock = Mage::getBlock("Block_Shipping_Grid")->setShippings();
        $layout = $this->getLayout();
    
        $layout->setTemplate("View/core/layout/one_column.php");
        $layout->getChild("Content")->addChild($gridBlock, 'Grid');

        $this->renderLayout();
    }
    public function formAction()
    {

        $form = Mage::getBlock('Block_Shipping_Edit');
        $layout = $this->getLayout();
        $shippingTab = Mage::getBlock("Block_Shipping_Edit_tabs");
        $layout->getChild('Sidebar')->addChild($shippingTab, 'Tab');
        $layout->getChild('Content')->addChild($form, 'Grid');
        $this->renderLayout();
    }

    public function saveAction()
    {
        try {
            $shipping = Mage::getModel("Model_Shipping");
            if (!$this->getRequest()->isPost()) {
                throw new Exception("Invalid Post Request");
            }
            $shippingId = $this->getRequest()->getGet('id');
            if (!$shippingId) {
                date_default_timezone_set('Asia/Kolkata');
                $shipping->createdDate = date("Y-m-d H:i:s");
                $this->getMessage()->setSuccess("Shipping Inserted !!");
            } else {
                $shipping =  $shipping->load($shippingId);
                if (!$shipping) {
                    throw new Exception("Data Not Found");
                }
                $this->getMessage()->setSuccess("Shipping Updated !!");
            }

            $shippingData = $this->getRequest()->getPost('shipping');

            if (!array_key_exists('status', $shippingData)) {
                $shippingData['status'] = 0;
            } else {
                $shippingData['status'] = 1;
            }

            $shipping->setData($shippingData);
            $shipping->save();
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
            $model = Mage::getModel('Model_Shipping');
            $model->id = $id;
            $model->status = $status;
            $model->changeStatus();
            if ($model->changeStatus()) {
                $this->getMessage()->setSuccess("Shipping Status Updated !! ");
                
            }
        } catch (Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
        }
        $this->redirect("grid", null, null, true);
    }
    public function deleteAction()
    {
        try {
            if ($this->request->isPost()) {
                throw new Exception("Invalid Request");
            }

            $id = $this->getRequest()->getGet('id');
            $delModel = Mage::getModel('Model_Shipping');
            $delModel->id = $id;
            $delModel->delete();
            if ($delModel->delete()) {
                $this->getMessage()->setSuccess("Shipping Deleted !! ");
            } else {
                $this->getMessage()->setSuccess("Unable To Delete Shipping !! ");
            }
        } catch (Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
        }
        $this->redirect('grid', null, null, true);
    }
}

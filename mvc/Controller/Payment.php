<?php

Mage::loadFileByClassName('Controller_Core_Admin');
Mage::loadFileByClassName('Block_Core_Layout');
Mage::loadFileByClassName('Model_Core_Adapter');


class Controller_Payment extends Controller_Core_Admin
{
    
    protected $payments = [];

    public function __construct()
    {
        parent:: __construct();
    }

    public function setPayments($payments)
    {
        $this->payments = $payments;
        return $this;
    }

    public function getPayments()
    {
        return $this->payments;
    }

    public function layoutAction()
    {
        
       
        $layout = $this->getLayout(); 
        $gridBlock = Mage::getBlock('Block_Payment_Grid');
        $layout->getChild('content');
        $this->renderLayout();  //It renders layout using render layout method which is again in Admin

    }

    public function gridAction()
    {
        //require_once 'Block/Product/Grid.php';
        
        try
        {

            // Mage::getBlock('Block_Product_Grid');
            // $gridBlock = new Block_Product_Grid();
            // $gridBlock->setController($this);
            // $gridBlock->setProducts();
            // $gridBlock->toHtml();

           $payment = Mage::getModel('Model_Payment');
            $this->setPayments( $payment->fetchAll());
            require_once 'View/payment/grid.php';
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
            $lefttab = Mage::getBlock('Block_Payment_Edit_Tabs');
            $left->addChild($lefttab);
            $content = $layout->getChild('content');
            $paymentgrid = Mage::getBlock('Block_Payment_Edit');
            $content->addChild($paymentgrid);
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
               $payment = Mage::getModel('Model_Payment');
                $postData = $this->getRequest()->getPost('payment');
                if ( $methodId = $this->getRequest()->getGet('id')) {
                    if (! $payment->load( $methodId)) {
                        throw new Exception("Something went wrong.");
                   
                    }
                        $postData['methodId'] =$methodId;
                        // $postData['updatedDate'] = date("Y-m-d H:i:s");
                } else {
                   $postData['createdDate'] = date("Y-m-d H:i:s");
                }
                
               $payment->setData($postData);
                if (! $payment->save()) {
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
           $methodId = (int) $this->getRequest()->getGet('id');
            if (! $methodId) {
                
                throw new Exception("Error Processing Request");

            }
           $payment = Mage::getModel('Model_Payment');
            if (! $payment->delete( $methodId)) {
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
       $payment = Mage::getModel('Model_Payment');
       $payment->name = 'Ratan';
       $payment->number = 123;
    }
}

?>

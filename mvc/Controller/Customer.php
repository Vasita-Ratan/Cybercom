<?php

Mage::loadFileByClassName('Controller_Core_Admin');
Mage::loadFileByClassName('Block_Core_Layout');
Mage::loadFileByClassName('Model_Core_Adapter');


class Controller_Customer extends Controller_Core_Admin
{
    
    protected $customers = [];

    public function __construct()
    {
        parent:: __construct();
    }

    public function setCustomers($customers)
    {
        $this->customers = $customers;
        return $this;
    }

    public function getCustomers()
    {
        return $this->customers;
    }

    public function layoutAction()
    {
        
        $layout = $this->getLayout(); 
        $gridBlock = Mage::getBlock('Block_Customer_Grid');
        $layout->getChild('content');
        $this->renderLayout();  
    }

    public function gridAction()
    {
       
        try
        {

            // $layout = $this->getLayout();
            // $content = $layout->getChild('content');
            // $customergrid = Mage::getBlock('Block_Customer_Grid');
            // $content->addChild($customergrid,'content');
            // $this->renderLayout();

            $customer = Mage::getModel('Model_Customer');
            $this->setCustomers($customer->fetchAll());
            require_once('View/customer/grid.php');
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
            $lefttab = Mage::getBlock('Block_Customer_Edit_Tabs');
            $left->addChild($lefttab);
            $content = $layout->getChild('content');
            $customergrid = Mage::getBlock('Block_Customer_Edit');
            $content->addChild($customergrid);
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
        try 
        {
             if (!$this->getRequest()->isPost()) 
             {
                throw new Exception("Error Processing Request", 1);

             }

            $customer = Mage::getModel('Model_Customer');
            $postData = $this->getRequest()->getPost('customer');
            if ($customerId = $this->getRequest()->getGet('id')) 
            {
                if (!$customer->load($customerId)) 
                {
                    throw new Exception("Something went wrong.");
               
                }
                 $postData['customerId'] = $customerId;
                    // $postData['updatedDate'] = date("Y-m-d H:i:s");
            } 
            else 
            {
                $postData['createdDate'] = date("Y-m-d H:i:s");
            }
            
            $customer->setData($postData);
            if (!$customer->save()) 
            {
                throw new Exception("Something went wrong.");
            }
            $this->redirect('grid',null,null,true);
        } 
        catch (Exception $e) 
        {
            echo $e->getmessage();
            die();
        }
    }

    public function deleteAction()
    {
        try{
            $customerId = (int) $this->getRequest()->getGet('id');
            if (!$customerId) 
            {
                
                throw new Exception("Error Processing Request");

            }
            $customer = Mage::getModel('Model_Customer');
            if (!$customer->delete($customerId)) {
                throw new Exception("Something went wrong.");
            }
            $this->redirect('grid', null, null, true);
        }
        catch (Exception $e) 
        {
            echo $e->getMessage();
        }
    }

    public function testAction()
    {
        $customer = Mage::getModel('Model_Customer');
        $customer->name = 'Ratan';
        $customer->number = 123;
    }
}

?>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         new Exception("Invalid Request."}
               
<?php

Mage::loadFileByClassName('Controller_Core_Admin');
Mage::loadFileByClassName('Block_Core_Layout');
Mage::loadFileByClassName('Model_Core_Adapter');


class Controller_Shipping extends Controller_Core_Admin
{
    
    protected $shippings = [];

    public function __construct()
    {
        parent:: __construct();
    }

    public function setShippings($shippings)
    {
        $this->shippings = $shippings;
        return $this;
    }

    public function getShippings()
    {
        return $this->shippings;
    }

    public function layoutAction()
    {
        
        // $layout->setTemplate("View/core/layout/threeColumn.php");
        //It uses getlayout method of Controller Admin
        $layout = $this->getLayout(); 
        $gridBlock = Mage::getBlock('Block_Shippings_Grid');
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

           $shipping = Mage::getModel('Model_Shipping');
            $this->setShippings( $shipping->fetchAll());
            // print$shipping;
            // die()
            require_once './View/shipping/grid.php';
    
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
            $lefttab = Mage::getBlock('Block_Shipping_Edit_Tabs');
            $left->addChild($lefttab);
            $content = $layout->getChild('content');
            $shippinggrid = Mage::getBlock('Block_Shipping_Edit');
            $content->addChild($shippinggrid);
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
                    throw new Exception("Invalid Request.");
                  }
                   $shipping = Mage::getModel('Model_Shipping');
                   $postData = $this->getRequest()->getPost('shipping');
                   // echo "<pre>";
                   // print_r($postData);
                   // die();
                    if ( $methodId = $this->getRequest()->getGet('id')) 
                    {
                        if (! $shipping->load( $methodId)) 
                        {
                            throw new Exception("Something went wrong.");
                       
                        }
                        $postData['methodId'] =$methodId;
                            // $postData['updatedDate'] = date("Y-m-d H:i:s");
                    } 
                    else 
                    {
                       $postData['createdDate'] = date("Y-m-d H:i:s");
                    }
                    
                   $shipping->setData($postData);
                    if (! $shipping->save()) 
                    {
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
           $shipping = Mage::getModel('Model_Shipping');
            if (! $shipping->delete( $methodId)) {
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
       $shipping = Mage::getModel('Model_Shipping');
       $shipping->name = 'Ratan';
       $shipping->number = 123;
    }
}

?>

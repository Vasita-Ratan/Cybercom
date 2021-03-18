<?php

Mage::loadFileByClassName('Controller_Core_Admin');
Mage::loadFileByClassName('Block_Core_Layout');
Mage::loadFileByClassName('Model_Core_Adapter');


class Controller_Product extends Controller_Core_Admin
{
    
    protected $products = [];


    public function testAction1()
    {
        $session = new Model_Core_Session();
        print_r($session);
        
    }
    public function __construct()
    {
        parent:: __construct();
    }

    public function setProducts($products)
    {
        $this->products = $products;
        return $this;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function layoutAction()
    {
        
        // $layout->setTemplate("View/core/layout/threeColumn.php");
        //It uses getlayout method of Controller Admin
        $layout = $this->getLayout(); 
        $gridBlock = Mage::getBlock('Block_Product_Grid');
        $layout->getChild('content');
        $this->renderLayout();  //It renders layout using render layout method which is again in Admin

    }

    public function gridAction()
    {
       
        try
        {

            // $layout = $this->getLayout();
            // $content = $layout->getChild('content');
            // $productgrid = Mage::getBlock('Block_Product_Grid');
            // $content->addChild($productgrid,'content');
            // $this->renderLayout();
            $product = Mage::getModel('Model_Product');
            $this->setProducts( $product->fetchAll());
            require_once 'View/product/grid.php';
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
            // echo "<pre>";
            //   print_r($layout);
            //   die();
            $layout->setTemplate('View/core/layout/threeColumn.php');
            $left = $layout->getChild('left');
            $lefttab = Mage::getBlock('Block_Product_Edit_Tabs');
            $left->addChild($lefttab);
            $content = $layout->getChild('content');
            $productgrid = Mage::getBlock('Block_Product_Edit');
            $content->addChild($productgrid);
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
                $product = Mage::getModel('Model_Product');
                $postData = $this->getRequest()->getPost('product');
                if ($productId = $this->getRequest()->getGet('id')) {
                if (!$product->load($productId)) {
                throw new Exception("Something went wrong.");
               
                }
                $postData['productId'] = $productId;
                // $postData['updatedDate'] = date("Y-m-d H:i:s");
                } else {
                // $postData['createdDate'] = date("Y-m-d H:i:s");
                }
                
                $product->setData($postData);
                if (!$product->save()) {
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
            $productId = (int) $this->getRequest()->getGet('id');
            if (!$productId) {
                
                throw new Exception("Error Processing Request");

            }
            $product = Mage::getModel('Model_Product');
            if (!$product->delete($productId)) {
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
        $product = Mage::getModel('Model_Product');
        $product->name = 'Ratan';
        $product->number = 123;
    }
}

?>

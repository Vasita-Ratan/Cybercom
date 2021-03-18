<?php

Mage::loadFileByClassName('Controller_Core_Admin');
Mage::loadFileByClassName('Block_Core_Layout');
Mage::loadFileByClassName('Model_Core_Adapter');


class Controller_Login extends Controller_Core_Admin
{
    
    protected $login = [];

    public function __construct()
    {
        parent:: __construct();
    }

    public function setLogins($logins)
    {
        $this->logins = $logins;
        return $this;
    }

    public function getLogins()
    {
        return $this->logins;
    }

    public function layoutAction()
    {
        
        // $layout->setTemplate("View/core/layout/threeColumn.php");
        //It uses getlayout method of Controller Admin
        $layout = $this->getLayout(); 
        $gridBlock = Mage::getBlock('Block_Login_Grid');
        $layout->getChild('content');
        $this->renderLayout();  //It renders layout using render layout method which is again in Admin

    }


    public function formAction()
    {
        
        try
        {

             $login = Mage::getModel('Model_Login');
            if( $loginId = $this->getRequest()->getGet('id'))//passing by id in url
            {
                if(! $login->load( $loginId))
                {
                    throw new Exception("Error promapting");
                }
            }
            $this->setLogins( $login);
            require_once 'View/login/form.php';
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
                 $login = Mage::getModel('Model_Login');
                $postData = $this->getRequest()->getPost('login');
                if ( $loginId = $this->getRequest()->getGet('id')) {
                    if (! $login->load( $loginId)) {
                        throw new Exception("Something went wrong.");
                   
                    }
                        $postData['loginId'] =  $loginId;
                        // $postData['updatedDate'] = date("Y-m-d H:i:s");
                } else {
                
                }
                
                 $login->setData($postData);
                if (! $login->save()) {
                throw new Exception("Something went wrong.");
                }
                $this->redirect('grid',null,null,true);
        } 
        catch (Exception $e) {
            echo $e->getmessage();
            die();
        }
    }
    public function testAction()
    {
         $login = Mage::getModel('Model_Login');
         $login->name = 'Ratan';
         $login->number = 123;
    }
}

?>

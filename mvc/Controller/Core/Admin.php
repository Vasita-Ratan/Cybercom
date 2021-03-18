<?php

Mage::loadFileByClassName("Model_Core_Request");
 //-Mage::loadFileByClassName("Block_Core_Layout");

class Controller_Core_Admin 
{
    protected $request = null;
    protected $layout = null;

    public function __construct(){
        $this->setRequest();
        $this->setLayout(new Block_Core_Layout());
    }

    public function setRequest(){
        $this->request = new Model_Core_Request();
        return $this->request;
    }  
    public function getRequest(){
        if (!$this->request) {
            $this->setRequest();
        }
        return $this->request;
    }

    public function setLayout(Block_Core_Layout $layout = null)
    {
        if (!$layout) 
        {

            $layout = new Block_Core_Layout();
        }
        $this->layout = $layout;
        return $this;  
        //It will set the layout
    }

    public function getlayout()
    {
        return $this->layout;
    
    }

    public function renderLayout()
    {
        //It will render all the layout using getLayout
        echo $this->getLayout()->toHtml();
    }

    public function getUrl($actionName = null, $controllerName = null,
     $params = null, $resetParams = false){
        $final = $_GET;
        if($resetParams){
            $final = [];
        }

        if($controllerName == null)
        {
            $controllerName = $this->getRequest()->getControllerName();
        }

        if($actionName == null)
        {
            $actionName = $this->getRequest()->getActionName();
        }
        
        $final['c'] = $controllerName;
        $final['a'] = $actionName;

        if(is_array($params)){
            $final = array_merge($final, $params);
        }
        $queryString = http_build_query($final);
        unset($final);
        return "http://localhost/Questecom/index.php?{$queryString}";
    }

    public function redirect($actionName = null, $controllerName = null, $params = null, $resetParams = false){
        $url = $this->getUrl($actionName, $controllerName, $params, $resetParams);
        header("location: {$url}");
        exit(0);
    }
}
?>

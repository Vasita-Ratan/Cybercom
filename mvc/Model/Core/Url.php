<?php 


/**
 * 
 */

Mage::loadFileByClassName("Model_Core_Request");

class Model_Core_Url
{
    protected $request = null;

    function __construct()
    {
        # code...
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
    public function baseUrl($baseUrl)
    {
        return "http://localhost/Questecom/{$baseUrl}";
    }



}
 ?>
<?php

class Controller_Core_Front{
    public static function init()
    {
        $reqest = Mage::getModel('Model_Core_Request');

        $controllerName = ucwords($reqest->getControllerName());
        $controllerName = "Controller_".$controllerName;
        $actionName = $reqest->getActionName()."Action";
        $controller = Mage::getController($controllerName);
        $controller = new $controllerName();
        $controller->$actionName();
    }
}

?>
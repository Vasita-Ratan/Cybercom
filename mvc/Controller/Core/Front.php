<?php

class Controller_Core_Front
{  
	public static function init()
	{
		
		$request = Mage::getModel('Model_Core_Request');
		$controllerName = $request->getControllerName();
		if ($controllerName == 'index') {
			require_once 'index.php';
			die();
		}
		
		$className = "Controller_".$controllerName;
		$actionName		= $request->getActionName();
		$method = $actionName."Action";
		$controller = Mage::getController($className);
		$controller->$method();
	}


}

?>
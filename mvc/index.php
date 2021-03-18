<?php
//  include_once "includes/header.php";
// include_once "includes/navbar.php";
// include_once "includes/scripts.php";
//  include_once "Assets/includes/header.php";
// include_once "Assets/includes/navbar.php";
// include_once "Assets/includes/scripts.php";


class Mage{
    public static function init()
    {
    	self::loadFileByClassName("Controller_Core_Front");
    	Controller_Core_Front::init();
    	// $control = self::getController("Controller_Core_Front");
    	// print_r($control);

    }

    public static function getController($className)
    {
    	self::loadFileByClassName($className);
    	$className = str_replace("_", " ", $className);
    	$className = ucwords($className);
    	$className = str_replace(" ", "_",$className);
    	return new $className;

    }

    public static function getBlock($className)
    {
    	self::loadFileByClassName($className);
    	$className = str_replace("_", " ", $className);
        $className = ucwords($className);
        $className = str_replace(" ", "_",$className);
        return new $className;
    }

	public static function getModel($className)
	    {
	    	self::loadFileByClassName($className);
            $className = str_replace("_", " ", $className);
            $className = ucwords($className);
            $className = str_replace(" ", "_",$className);
            return new $className;
	    }

    public static function loadFileByClassName($className)
    {
    	$className = str_replace("_", " ", $className);
    	$className = ucwords($className);
    	$className = str_replace(" ", "/",$className);
    	$className = $className.".php";
    	require_once($className);
    }

}

Mage::init();

?>
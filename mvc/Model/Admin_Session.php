<?php


/**
 *  
 */
Mage::loadFileByClassName('Model_Core_Session');
class Model_Admin_Session extends Model_Core_Session
{
	protected $namespace = 'admin';
	function __construct(argument)
	{
		
	}
}
?>
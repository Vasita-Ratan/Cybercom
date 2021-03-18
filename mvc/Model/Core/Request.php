<?php  

/**
 * 
 */
class Model_Core_Request 
{
	
	public function isPost()
	{
		if(strtoupper($_SERVER['REQUEST_METHOD']) != 'POST'){
			//throw new Exception("Error Processing Post");
				return false;
		}
		return true;
	}

	public function getPost($key = NULL , $optional = NULL)
	{
		if(is_null($key)){
			return $_POST;
		}

		if(!array_key_exists($key, $_POST)){
			return $optional;
		}
		return $_POST[$key];
	}

	public function getGet($key = NULL , $optional = NULL)
	{
		if(is_null($key)){
			return $_GET;
		}

		if(!array_key_exists($key, $_GET)){
			return $optional;
		}

		return $_GET[$key];
	}

	public function getControllerName()
	{
		return $this->getGet('c','index');
	}

	public function getActionName()
	{
		return $this->getGet('a','index');
	}

	


}


?>
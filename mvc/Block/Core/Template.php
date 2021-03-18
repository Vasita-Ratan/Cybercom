<?php
/**
 * 
 */

class Block_Core_Template 
{
	private $controller = null;
	private $template = null;
	protected $children = [];
    protected $url = null;

	function __construct()
	{
        $this->setUrl();
	}


    public function setUrl()
    {
        

        $this->url = Mage::getModel('Model_Core_Url');
        return $this;

    }

    public function getUrl()
    {
        if(!$this->url)
        {
            $this->setUrl();
        } 
        return $this->url;
    }


	public function setController(Controller_Core_Admin $controller)
	{
		$this->controller = $controller;
		return $this->controller;

	}

	public function getController()
	{
		return $this->controller;
	}

	public function setTemplate($template)
	{
		$this->template = $template;
		return $this;

	}

	public function getTemplate()
	{
		return $this->template;
	}


	public function toHtml()
	{
        
		require_once($this->getTemplate());

	}

    public function setChildren(array $children = [])
    {
        $this->children = $children;
        return $this;
    }

    public function getChildren()
    {
        return $this->children;
    }
    
    public function addChild(Block_Core_Template $child , $key = null)
    {
        if (!$key) {
            $key = get_class($child);
        }
        $this->children[$key] = $child;
        return $this;
    }
    public function getChild($key)
    {
        if(!array_key_exists($key, $this->children))
        {
            return null;
        }
        return $this->children[$key];
    }

    public function removeChild($key)
    {
        if (array_key_exists($key,$this->children))
        {
            unset($this->children[$key]); //Unset will remove that key from children array. 
        }
        return $this;
    }
}

 ?>
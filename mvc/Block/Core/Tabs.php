<?php
Mage::loadFileByClassName('Block_Core_Template');
/**
 * 
 */
class Block_Core_Tabs extends Block_Core_Template
{
	protected $tabs = [];
	protected $defultTab = null;
	public function __construct()
	{
		parent::__construct();
	}
	public function setTabs($tags)
	{
		$this->tags = $tags;
		return $this;		
	}

	public function getTabs()
	{
		return $this->tabs;
	}

	public function addTab($key,$value)
	{
		$this->tabs[$key] = $value;
		return $this;
	}

	public function getTab($key,$optional = null)
	{
		if(array_key_exists($key,$this->$tabs))
		{
			return $this->tabs[$key];
		}
		return $this->$optional;

	}
	public function removeTab($key)
	{
		if(array_key_exists($key, $this->tabs))
		{
			unset($this->tabs[$key]);
			
		}
		return $this;
	}

	public function setDefaultTab($defaultTab)
	{
		$this->defaultTab = $defaultTab;
		return $this;
	}

	public function getDefaultTab()
	{
		return $this->defaultTab;
	}
}
?>
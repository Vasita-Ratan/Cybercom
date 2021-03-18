<?php 

Mage::loadFileByClassName('Block_Core_Template');
class Block_Shipping_Edit_Tabs_Form extends Block_Core_Template
{
	protected $shipping = null;
	function __construct()
	{
		$this->setTemplate('View/shipping/edit/tabs/form.php');
	}

	public function setShipping($shipping = null)
	{

		if(!$shipping)
		{
			$shipping = Mage::getModel('Model_Shipping');
		    if($shippingId = $this->getUrl()->getRequest()->getGet('id'))
		    {
		        if(!$shipping->load($shippingId))
		        {
		            throw new Exception("Error promapting");
		        }
		    }
		    $this->shipping = $shipping;
		    return $this;
		}
	}

	public function getShipping()
	{
		if(!$this->shipping)
		{
			$this->setShipping();
		}
		return $this->shipping;
	}
	

	
}

 ?>
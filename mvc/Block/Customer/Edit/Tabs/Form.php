<?php 

Mage::loadFileByClassName('Block_Core_Template');
class Block_Customer_Edit_Tabs_Form extends Block_Core_Template
{
	protected $customer = null;																													
	function __construct()
	{
		$this->setTemplate('View/customer/edit/tabs/form.php');
	}

	public function setCustomer($customer = null)
	{

		if (!$customer) 
		{
			$customer = Mage::getModel('Model_Customer');
		    if($customerId = $this->getUrl()->getRequest()->getGet('id'))
		    {
		        if(!$customer->load($customerId))
		        {
		            throw new Exception("Error promapting");
		        }
		    }
		        $this->customer = $customer;
		        return $this;		# code...
		}
	
	}

	public function getCustomer()
	{
		if(!$this->customer)
		{
			$this->setCustomer();
		}
		return $this->customer;
	}
	
}

 ?>
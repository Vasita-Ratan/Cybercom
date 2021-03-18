<?php 

Mage::loadFileByClassName('Block_Core_Template');
class Block_Payment_Edit_Tabs_Form extends Block_Core_Template
{
	protected $payment = null;
	function __construct()
	{
		$this->setTemplate('View/payment/edit/tabs/form.php');
	}

	public function setPayment($payment = null)
	{

		if (!$payment) 
		{
			$payment = Mage::getModel('Model_Payment');
	        if($paymentId = $this->getUrl()->getRequest()->getGet('id'))
	        {
	            if(!$payment->load($paymentId))
	            {
	                throw new Exception("Error promapting");
	            }
	        }
		}
        $this->payment = $payment;
        return $this;
	}

	public function getPayment()
	{
		if (!$this->payment) {
			$this->setPayment();
		}
		 return $this->payment;
	}
	
}

 ?>
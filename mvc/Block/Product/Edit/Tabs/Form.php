
 <?php 

Mage::loadFileByClassName('Block_Core_Template');
class Block_Product_Edit_Tabs_Form extends Block_Core_Template
{
	protected $product = null;
	function __construct()
	{
		$this->setTemplate('View/product/edit/tabs/form.php');
	}

	public function setProduct($product = null)
	{
		if (!$product) 
		{
			$product = Mage::getModel('Model_Product');
		    if($productId = $this->getUrl()->getRequest()->getGet('id'))
		    {
		        if(!$product->load($productId))
		        {
		            throw new Exception("Error promapting");
		        }
		    }
		    $this->product = $product;
		    return $this;	
		}
		
	}

	public function getProduct()
	{
		if(!$this->product)
		{
			 $this->setProduct();	
		}
		return $this->product;
	}
	
}

 ?>
<?php 

Mage::loadFileByClassName('Block_Core_Template');
class Block_Category_Edit_Tabs_Form extends Block_Core_Template
{
	protected $category = null;
	protected $categoryOptions = [];
	function __construct()
	{
		$this->setTemplate('View/category/edit/tabs/form.php');
	}

	public function setCategory($category = null)
	{

		if (!$category) 
		{
			$category = Mage::getModel('Model_Category');
		    if($categoryId = $this->getUrl()->getRequest()->getGet('id'))
		    {
		        if(!$category->load($categoryId))
		        {
		            throw new Exception("Error promapting");
		        }
		    }
		    $this->category = $category;
		    return $this;
		}
		
	}

	public function getCategory()
	{
		if(!$this->category)
		{
			  $this->setCategory();
		}
		return $this->category;
	}

	public function getCategoryOptions()
	{
		if (!$categoryOptions) {
				
			$query = "SELECT`categoryId` , `name` FROM `{$this->getCategory()->getTableName()}`;"; 
			$categoryOptions = $this->getCategory()->getAdapter()->fetchPairs($query);
		}
		
	}
	
}

 ?>
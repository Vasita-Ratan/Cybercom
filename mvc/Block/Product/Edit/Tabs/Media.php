
 <?php 

 Mage::loadFileByClassName('Block_Core_Template');
 class Block_Product_Edit_Tabs_Media extends Block_Core_Template
 {
 	protected $media= null;
 	function __construct()
 	{
 		$this->setTemplate('View/product/edit/tabs/media.php');
 	}

 	public function setMedia($media= null)
 	{
 		if (!$media) 
 		{
 			$media= Mage::getModel('Model_Media');
 		    if($mediaId = $this->getUrl()->getRequest()->getGet('id'))
 		    {
 		        if(!$media->load($mediaId))
 		        {
 		            throw new Exception("Error promapting");
 		        }
 		    }
 		    $this->media = $media;
 		    return $this;	
 		}
		
 	}

 	public function getMedia()
 	{
 		if(!$this->media)
 		{
 			 $this->setMedia();	
 		}
 		return $this->media;
 	}
	
 }

 ?>
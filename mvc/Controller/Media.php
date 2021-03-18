<?php 


/**
 * 
 */
Mage::loadFileByClassName('Controller_Core_Admin');
class Controller_Media extends Controller_Core_Admin{
	
	function __construct(argument)
	{
        
	}

    public function layoutAction()
    {
        $layout = $this->getLayout(); 
        $gridBlock = Mage::getBlock('Block_Media_Grid');
        $layout->getChild('content')->addChild($gridBlock);
        $this->renderLayout();  
    }

      public function gridAction()
    {
       
        try
        {
            $media = Mage::getModel('Model_Media');
            $this->setProducts( $media->fetchAll());
            require_once 'View/product/edit/tabs/media.php';
        } 
        catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }

    public function formAction()
    {
        try
        {

            $layout = $this->getLayout();
            // echo "<pre>";
            //   print_r($layout);
            //   die();
            $layout->setTemplate('View/core/layout/threeColumn.php');
            $left = $layout->getChild('left');
            $lefttab = Mage::getBlock('Block_Product_Edit_Tabs');
            $left->addChild($lefttab);
            $content = $layout->getChild('content');
            $productgrid = Mage::getBlock('Block_Product_Edit');
            $content->addChild($productgrid);
            $this->renderLayout();
        }
        catch(Exception $e)
        {
            echo $e->getMessage();
            die();
        }
    
    }

    public function FileAction()
    {
    
        echo "hello";
        die();
        if(isset($_FILES['image']))
        {
            $errors= array();
            $file_name = $_FILES['image']['name'];
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
            $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

            $expensions= array("jpeg","jpg","png");

            if(in_array($file_ext,$expensions)=== false)
            {
                $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            }

            if($file_size > 2097152)
            {
                 $errors[]='File size must be excately 2 MB';
            }

            if(empty($errors)==true)
            {
                 move_uploaded_file($file_tmp,"images/".$file_name);
                 echo "Success";
            }else\
            {
               print_r($errors);
            }
        }
    }
}

 ?>
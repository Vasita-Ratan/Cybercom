<?php

Mage::loadFileByClassName('Model_Core_Table');
class Model_Category extends Model_Core_Table
{
    function __construct()
    {
        parent::__construct();
        $this->setTableName('category');
        $this->setPrimaryKey('categoryId');

    }
    
    

   
}

?>

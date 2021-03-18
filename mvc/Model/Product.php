<?php

Mage::loadFileByClassName('Model_Core_Table');
class Model_Product extends Model_Core_Table
{
    function __construct()
    {
        parent::__construct();
        $this->setTableName('product');
        $this->setPrimaryKey('productId');

    }
    
    

   
}

?>



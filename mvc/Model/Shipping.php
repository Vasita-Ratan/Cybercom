<?php

Mage::loadFileByClassName('Model_Core_Table');
class Model_Shipping extends Model_Core_Table
{
    function __construct()
    {
        parent::__construct();
        $this->setTableName('shipping');
        $this->setPrimaryKey('methodId');

    }
    
    

   
}

?>

<?php

Mage::loadFileByClassName('Model_Core_Table');
class Model_Payment extends Model_Core_Table
{
    function __construct()
    {
        parent::__construct();
        $this->setTableName('payment');
        $this->setPrimaryKey('methodId');

    }
    
    

   
}

?>



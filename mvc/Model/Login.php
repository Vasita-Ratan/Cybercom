<?php

Mage::loadFileByClassName('Model_Core_Table');
class Model_Login extends Model_Core_Table
{
    function __construct()
    {
        parent::__construct();
        $this->setTableName('login');
        $this->setPrimaryKey('loginId');

    }
    
    

   
}

?>



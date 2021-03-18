<?php

Mage::loadFileByClassName('Model_Core_Table');
class Model_Media extends Model_Core_Table
{
    function __construct()
    {
        parent::__construct();
        $this->setTableName('media');
        $this->setPrimaryKey('mediaId');

    }
    
    

   
}

?>



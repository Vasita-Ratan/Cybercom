<?php


Mage::loadClassByFileName("Model_Core_Table");

class Model_GroupPrice extends Model_Core_Table
{
    public function __construct()
    {
        $this->setTableName('product_group_price')->setPrimaryKey('entityId');
    }
}

?>
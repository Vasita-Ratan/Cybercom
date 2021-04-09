<?php


Mage::loadClassByFileName("Model_Core_Table");
class Model_CustomerGroup extends Model_Core_Table
{
    public function __construct()
    {
        parent::__construct();
        $this->setTableName('customer_group')->setPrimaryKey('group_id');
    }
}

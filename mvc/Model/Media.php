<?php

Mage::loadClassByFileName("Model_Core_Table");
class Model_Media extends Model_Core_Table
{
    public function __construct()
    {
        parent::__construct();
        $this->setTableName('media')->setPrimaryKey('mediaId');
    }
}

<?php

Mage::loadClassByFileName('Model_Core_Collection');

class Model_Attribute_Collection extends Model_Core_Collection
{
    public function __construct()
    {
        parent::__construct();
    }
}

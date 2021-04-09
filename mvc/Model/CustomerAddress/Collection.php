<?php


Mage::loadClassByFileName("model_core_collection");
// CustomerAddressModel
class Model_CustomerAddress_Collection extends Model_Core_Collection {
    
    public function __construct()
    {
        parent::__construct();
    }

}

?>
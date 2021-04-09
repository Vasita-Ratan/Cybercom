<?php

Mage::loadClassByFileName("Block_Core_Template");
class Block_Shipping_Edit_Tabs_Form extends Block_Core_Template
{
    protected $shippings = null;
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate("View/shipping/edit/tabs/form.php");
    }

    public function setShippings($shippings = null)
    {
        if (!$shippings) {
            $shippings = Mage::getModel("Model_Shipping");
            if ($id = $this->getRequest()->getGet('id')) {
                $shippings = $shippings->load($id);
                if (!$shippings) {
                    return null;
                }
            }
        }
        $this->shippings = $shippings;
        return $this;
    }

    public function getShippings()
    {
        if (!$this->shippings) {
            $this->setShippings();
        }
        return $this->shippings;
    }
}

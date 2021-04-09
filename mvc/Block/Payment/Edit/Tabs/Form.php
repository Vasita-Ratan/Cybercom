<?php

Mage::loadClassByFileName("Block_Core_Template");
class Block_Payment_Edit_Tabs_Form extends Block_Core_Template
{
    protected $payments = null;
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate("View/payment/edit/tabs/form.php");
    }

    public function setPayments($payments = null)
    {
        if (!$payments) {
            $payments = Mage::getModel("Model_Payment");
            if ($id = $this->getRequest()->getGet('id')) {
                $payment = $payments->load($id);
                if (!$payment) {
                    return null;
                }
            }
        }
        $this->payments = $payments;
        return $this;
    }
    public function getPayments()
    {
        if (!$this->payments) {
            $this->setPayments();
        }
        return $this->payments;
    }
}

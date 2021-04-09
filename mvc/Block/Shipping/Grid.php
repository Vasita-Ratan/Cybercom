<?php



class Block_Shipping_Grid extends Block_Core_Template
{

    protected $shippings = null;
    protected $message = null;

    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('View/shipping/grid.php');
    }

    public function setShippings($shippings = null)
    {
        
        $shippings = Mage::getModel("Model_Shipping");
        $shippings = $shippings->fetchAll();
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

    public function getTitle()
    {
        return "Manage Shippings";
    }
}

?>
<?php


Mage::loadClassByFileName("Block_Core_Template");

class  Block_Product_Edit_Tabs_GroupPrice extends Block_Core_Template
{

    protected $groupPrices = [];
    public function __construct()
    {
        $this->setTemplate("View/product/edit/tabs/groupPrice.php");
    }

    public function setGroupPrices($groupPrices = null)
    {
         if (!$groupPrices) 
        {
            $groupPrices = Mage::getModel("Model_GroupPrice");
            if ($id = $this->getRequest()->getGet('id')) 
            {
                $groupPrices = $groupPrices->load($id);
                if (!$groupPrices)
                 {
                    return null;
                }
            }
        }  
    } 

    public function getGroupPrices()
    {
        
        if(!$this->groupPrices)
        {
             $this->setGroupPrices();     
        }
        return $this->groupPrices;

       
    }
    
    public function getCustomerGroup()
    {
    }
    //  $query = "SELECT `cg`.`customerGroupId`,`cg`.`name`,`cgp`.`groupPriceId`,`cgp`.`price`,`p`.`productId`,`p`.`price` as `productPrice` FROM `{$customerGroup->getTableName()}` as `cg` LEFT JOIN `{$groupPrices->getTableName()}` as `cgp` ON `cgp`.`customerGroupId` = `cg`.`customerGroupId` AND `cgp`.`productId` = '{$productId}' LEFT JOIN `{$product->getTableName()}` as `p` ON `p`.`productId` = '{$productId}'";
    //     $id = $this->getRequest()->getGet('id');
     
    //     $query = "SELECT cg.*,`pgp.productId`,`pgp.entityId`,`pgp.groupPrice`,`p.productPrice` as price
    //             FROM customer_group cg
    //                 LEFT JOIN product_group_price pgp 
    //                     ON `pgp.groupId` = `cg.group_id`
    //                         AND `pgp.productId` = '{$id}'
    //                 LEFT JOIN product p
    //                     ON `pgp.productId` = `p.productId`
    //     ";
        
    //     $customerGroups = Mage::getModel("Model_CustomerGroup");   
    
    //     $customerGroup =  $customerGroups->fetchAll($query);
    //     return $customerGroup;
    // }
    
}   
?>
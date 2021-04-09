<?php


Mage::getController("Controller_Core_Admin");
class Controller_GroupPrice extends Controller_Core_Admin
{

    public function saveAction()
    {
        $productId = $this->getRequest()->getGet('id'); 
        $groupData = $this->getRequest()->getPost('groupPrice');
        if(array_key_exists('Exist',$groupData))
        {
             foreach ($groupData['Exist'] as $group_id => $groupPrice)
             {
                $query ="UPDATE product_group_price SET groupPrice = {$groupPrice} WHERE groupId = {$groupId} AND productId = {$productId}";
                $groupPrice = Mage::getModel("Model_GroupPrice");
                $groupPrice->update($query);
                
            }
        }
        
        if(array_key_exists('New',$groupData)
        {
            foreach($groupData['New'] as $groupId => $groupPrice) 
            {
                $groupPriceModel = Mage::getModel("Model_GroupPrice");
                $groupPriceModel->productId = $productId;
                $groupPriceModel->groupId = $groupId;
                $groupPriceModel->groupPrice = $groupPrice;
                $groupPriceModel->save();   
            }
        }
      $this->redirect('grid','product',null,false);
    }
}


?>
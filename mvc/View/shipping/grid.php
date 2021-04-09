<?php 
Mage::getController("Controller_Shipping");
$shippings = $this->getShippings();
?>


<div class="page-header" id="banner">
    <div class="row">
        <div class="col-lg-8 col-md-7 col-sm-6">
            <a href="<?php echo "{$this->getUrl()->getUrl('form',null,null,true)}"; ?>" class="btn btn-primary" name="update">Add Shipment
               +
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card   mb-12">
            <div class="card-body">
                <h4 class="card-title"><?php echo $this->getTitle(); ?></h4>
                <table class="table" >
                    <thead bgcolor="#edfdff">
                        <tr> 
                              <th>ID</th>
                              <th>Name</th>
                              <th>Code</th>
                              <th>Amount</th>
                              <th>Status</th>
                              <th>Description</th>
                              <th>CreatedDate</th>
                              <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        if ($shippings == "") {
                        ?>
                            <tr>
                                <td colspan="9">
                                    <strong>
                                        <?php echo 'No Records Found'; ?>
                                    </strong>
                                </td>
                            </tr>
                            <?php

                        } else {
                            foreach ($shippings->getData() as $key => $value) {


                            ?>
                                <tr>
                                    <td><?php echo $value->methodId;?></td>
                                    <td><?php echo $value->name; ?></td>
                                    <td><?php echo $value->code; ?></td>
                                    <td><?php echo $value->amount; ?></td>
                                     <td><?php
                                        if ($value->status) {
                                            echo 'Enabled';
                                        } else {
                                            echo 'Disabled';
                                        }
                                        ?>
                                        <a href="<?php echo $this->getUrl()->getUrl('changeStatus', NULL, ['id' => $value->methodId, 'status' => $value->status], true); ?>">
                                            <i class="fa btn <?php echo ($value->status == 1) ? "fa-toggle-on" : "fa-toggle-off"; ?>" style="color: #34bf54 ; font-size:20px"></i>
                                        </a>
                                    
                                </td>

                                    <th><?php echo $value->description; ?></th>
                                      <th><?php echo $value->createdDate; ?></th>
                                    <th><a href="<?php echo $this->getUrl()->getUrl('form', NULL, ['id' => $value->methodId]); ?>"><i  class="fa fa-edit" style="color:#0b56bd ;font-size:25px"></i></a>
                                    <a href="<?php echo $this->getUrl()->getUrl('delete', NULL, ['id' => $value->methodId]); ?>"><i class="fa fa-trash" style="color: #e60909 ; font-size:25px"></i></a></th>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
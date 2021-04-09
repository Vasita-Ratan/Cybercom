<?php 

Mage::getController("Controller_Payment");

$payments = $this->getPayments();


 ?>


<div class="page-header" id="banner">
    <div class="row">
        <div class="col-lg-8 col-md-7 col-sm-6">
            <a href="<?php echo $this->getUrl()->getUrl('form'); ?>" class="btn btn-primary" name="update">Add Payment
                +
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card   mb-12">
            <div class="card-body">
              <!--   <h4 class="card-title"><?php// echo $this->getTitle(); ?></h4> -->
                <table class="table">
                    <thead bgcolor="#edfdff">
                        <tr>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Amount</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                       
                        if ($payments == "") {
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
                            foreach ($payments->getData() as $key => $value) {
                                //Method Id	Name	Code	Amount	Description	Status	Created At	Action
                            ?>
                                <tr>
                                    <td><?php echo $value->name; ?></td>
                                    <td><?php echo $value->code; ?></td>
                                    <td><?php echo $value->amount; ?></td>
                                    <td><?php echo $value->description; ?></td>
                                    <td><?php
                                        if ($value->status) {
                                            echo 'Enabled';
                                        } else {
                                            echo 'Disabled';
                                        }
                                        ?>
                                         <a href="<?php echo $this->getUrl()->getUrl('changeStatus', NULL, ['id' => $value->methodId, 'status' => $value->status], true); ?>">
                                            <i class="fa btn <?php echo ($value->status == 1) ? "fa-toggle-on" : "fa-toggle-off"; ?>" style="color: #34bf54; font-size:20px"></i>
                                        </a>
                                    </td>
                                    <td><?php echo $value->createdDate ?></td>
                                    <th>
                                        <a href="<?php echo $this->getUrl()->getUrl('form', NULL, ['id' => $value->methodId]); ?>"><i  class="fa fa-edit" style="color:#0b56bd ;font-size:25px"></i></a>
                                        <a href="<?php echo $this->getUrl()->getUrl('delete', NULL, ['id' => $value->methodId]); ?>"><i class="fa fa-trash" style="color: #e60909 ; font-size:25px"></i></a>
                                    </th>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
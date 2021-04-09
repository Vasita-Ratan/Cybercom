<?php 


Mage::getController("Controller_Customer");
$customers = $this->getCustomers();
 ?>

<div class="page-header" id="banner">
    <div class="row">
        <div class="col-lg-8 col-md-7 col-sm-6">
            <a href="<?php echo $this->getUrl()->getUrl('form'); ?>" class="btn btn-primary" name="update">Add Customer
                +
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card  mb-12">
            <div class="card-body">
                <h4 class="card-title"><?php echo $this->getTitle(); ?></h4>
                <table class="table"  >
                    <thead bgcolor="#edfdff">
                        <tr>
                             <th>Id</th>
                            <th>Group Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Contact No</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($customers == "") {
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
                            foreach ($customers->getData() as $key => $value) {

                            ?>
                                <tr>
                                    <td><?php echo $value->customerId ?></td>
                                    <td><?php echo $value->groupId ?></td>
                                    <td><?php echo $value->firstname; ?></td>
                                    <td><?php echo $value->lastname; ?></td>
                                    <td><?php echo $value->email ?></td>
                                    <td><?php echo $value->contactno ?></td>
                                    <td><?php
                                        if ($value->status) {
                                            echo 'Enabled';
                                        } else {
                                            echo 'Disabled';
                                        }
                                        ?>
                                          <a href="<?php echo $this->getUrl()->getUrl('changeStatus', NULL, ['id' => $value->customerId, 'status' => $value->status], true); ?>">
                                            <i class="fa btn <?php echo ($value->status == 1) ? "fa-toggle-on" : "fa-toggle-off"; ?>" style="color: #34bf54; font-size:20px"></i>
                                        </a>
                                    </td>
                                    <td><?php echo $value->createdDate ?></td>
                                    <th>
                                        <a href="<?php echo $this->getUrl()->getUrl('form', NULL, ['id' => $value->customerId]); ?>"><i  class="fa fa-edit" style="color:#0b56bd  ;font-size:25px"></i></a>
                                        <a href="<?php echo $this->getUrl()->getUrl('delete', NULL, ['id' => $value->customerId]); ?>"><i class="fa fa-trash" style="color: #e60909 ; font-size:25px"></i></a>
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
<?php 

 $customerGroups = $this->getCustomerGroups();

 ?>
<div>
    <div class="row">
        <div class="col-lg-8 col-md-7 col-sm-6">
            <a href="<?php echo $this->getUrl()->getUrl('form'); ?>" class="btn btn-primary" name="update">Add Customer Group
                +
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?php echo $this->getTitle(); ?></h4>
                <table class="table" >
                    <thead>
                        <tr>
                            <th>Group ID</th>
                            <th>Group Name</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                       
                        if ($customerGroups == "") {
                        ?>
                            <tr>
                                <td colspan="9">
                                    <p>
                                        <?php echo 'No Records Found'; ?>
                                    </p>
                                </td>
                            </tr>
                            <?php

                        } else {
                            foreach ($customerGroups->getData() as $key => $value) {

                            ?>
                                <tr>
                                    <td><?php echo $value->group_id ?></td>
                                    <td><?php echo $value->name; ?></td>
                                    <td><?php
                                        if ($value->status) {
                                            echo 'Enabled';
                                        } else {
                                            echo 'Disabled';
                                        }
                                        ?>
                                        <a href="<?php echo $this->getUrl()->getUrl('changeStatus', NULL, ['id' => $value->group_id, 'status' => $value->status], true); ?>">
                                            <i class="fa btn <?php echo ($value->status == 1) ? "fa-toggle-on " : "fa-toggle-off";?>" style="color: #34bf54; font-size:20px"></i>
                                        </a>
                                    </td>
                                    <td><?php echo $value->createdDate ?></td>
                                    <th>
                                        <a href="<?php echo $this->getUrl()->getUrl('form', NULL, ['id' => $value->group_id]); ?>"><i class="fa fa-edit" style="color:#0b56bd; ;font-size:25px"></i></a>
                                        <a href="<?php echo $this->getUrl()->getUrl('delete', NULL, ['id' => $value->group_id]); ?>"><i class="fa fa-trash" style="color: #e60909 ; font-size:25px"></i></a>
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
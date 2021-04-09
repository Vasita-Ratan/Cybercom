<?php $customerGroups=$this->getCustomerGroupOptions(); ?>
<div class="container">
    <div class="card text-left">
        <div class="card-body">
            <h4 class="card-title"></h4>
            <form action="<?php echo $this->getUrl()->getUrl('save'); ?>" method="post">

                <fieldset>
                    <legend>
                        <?php if ($this->getRequest()->getGet('id')) { ?>
                            <p class="h2 text-center">Update Customer Details</p><br>
                        <?php } else { ?>
                            <p class="h2 text-center">Add Customer Details</p><br>
                        <?php } ?>
                    </legend>


                    <?php $customer = $this->getCustomers(); ?>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label class="label" for="status">CustomerGroup</label>
                            <select id="status" class="input-text js-input" name="customer[group_id]">
                                <?php if($customerGroups): ?>
                                <?php foreach($customerGroups as $group_id=>$name):?>
                                    <option value="<?php echo $group_id ?>" <?php echo ($group_id==$customer->group_id) ? 'selected':'' ?>><?php echo $name ?></option>
                                <?php endforeach;?>
                                <?php endif; ?>
                            </select>
                            </div>

                        <div class="form-group col-md-6">

                            <label for="firstName">FIRST NAME</label>
                            <input id="firstname" name="customer[firstname]" value="<?php echo $customer->firstname ?>" type="text" placeholder="FIRST NAME" class="validate form-control" require>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="lastname">LAST NAME</label>
                            <input id="lastname" name="customer[lastname]" value="<?php echo $customer->lastname ?>" type="text" placeholder="LAST NAME" class="validate form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="price">EMAIL</label>
                            <input id="price" name="customer[email]" value="<?php echo $customer->email ?>" type="text" placeholder="EMAIL" class="validate form-control" require>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="mobile">MOBILE NUMBER</label>
                            <input type = "number" id="mobile" name="customer[contactno]" value="<?php echo $customer->contactno ?>" type="text" placeholder="MOBILE NUMBER" class="validate form-control" require>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="password">PASSWORD</label>
                            <input type="password" id="password" name="customer[password]" value="<?php echo $customer->password ?>" type="text" placeholder="PASSWORD" class="validate form-control" require>
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-switch">
                            <?php if ($customer->status) {
                                $label = 'checked';
                                $value = '1';
                            } else {
                                $label = '';
                                $value = '0';
                            }
                            ?>
                            <input type="checkbox" class="custom-control-input" id="status" <?php echo $label; ?> name='customer[status]'>
                            <label class="custom-control-label" for="status">Status</label>
                        </div>
                    </div>


                    <?php if (!$this->getRequest()->getGet('id')) { ?>

                        <button class="btn btn-primary" type="submit" name="add">Add Customer
                            <i class="fa fa-plus"></i>
                        </button>
                    <?php } else { ?>
                        <button class="btn btn-primary" type="submit" name="edit">Update Customer
                            <i class="fa fa-edit"></i>
                        </button>
                    <?php } ?>
                    <button type="reset" class="btn btn-warning">Reset <i class="fa fa-undo"></i></button>
                    <a class="btn btn-danger" href="<?php echo $this->getUrl()->getUrl('grid', null, null, true); ?>">Cancel <i class="fa fa-times"></i></a>
                </fieldset>
            </form>
        </div>
    </div>
</div>
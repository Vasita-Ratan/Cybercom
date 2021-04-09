<?php 

Mage::getController("Controller_Attribute");
$attributes = $this->getAttributes();

 ?>
<div class="row">
         <div class="input-field col s12">
               <a href="<?php echo $this->getUrl()->getUrl('form'); ?>" class="btn btn-primary" name="update">Add Attribute
              </a>                    
        </div>
   </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card   mb-12">
               <div class="card-body">
                   <h4 class="card-title"><?php echo $this->getTitle(); ?></h4>
                   <table class="table">
        <thead bgcolor="#edfdff">
            <tr>
                <th>ID</th>
                <th>EntityID</th>
                <th>Name</th>
                <th>Code</th>
                <th>InputType</th>
                <th>BackendType</th>
                <th>SortOrder</th>
                <th>BackendModel</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>

            <tbody>
            <?php
                               
            if($attributes == ""):
                    echo '<p class=text-center><strong>No Record Found</strong><p>';    
                else:
                    foreach ($attributes->getData() as $key => $value):
                    //print_r($record);
            ?>
            <tr id="txtData">
                <td><?php echo $value->attributeId;?></td>
                <td><?php echo $value->entityTypeId;?></td>
                <td><?php echo $value->name;?></td>
                <td><?php echo $value->code;?></td>
                <td><?php echo $value->inputType;?></td>
                <td><?php echo $value->backendType;?></td>
                <td><?php echo $value->sortOrder;?></td>
                <td><?php echo $value->backendModel;?></td>

                <th>
                    <a href="<?php echo $this->getUrl()->getUrl('form',NULL,['id'=>$value->attributeId]); ?>" class="btn-floating waves-effect waves-light yellow"><i  class="fa fa-edit" style="color:#0b56bd;font-size:25px"></i></a>
                    <a href="<?php echo $this->getUrl()->getUrl('delete',NULL,['id'=>$value->attributeId]); ?>" class="btn-floating waves-effect waves-light red"><i class="fa fa-trash" style="color: #e60909 ; font-size:25px"></i></a>
                </th>
            </th>
            
            </tr>
           <?php
            endforeach;
        endif;
           ?> 
            </tbody>
        </table>
            </p>
          </div>
          
        </div>
       
    </div>
    
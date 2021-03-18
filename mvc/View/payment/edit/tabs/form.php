<?php $payments = $this->getPayment(); 
$statusOption = [0 => 'Enabled', 1 => 'Disabled'];?>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 20%;
  padding: 4px;
  border: 1px solid #ccc;
  border-radius: 2px;
  box-sizing: border-box;
  margin-top: 0px;
  margin-bottom: 6px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  width: 80px;
  height: 60px;
  padding: 12px 12px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 2px;
  background-color: #f2f2f2;
  padding: 15px;
}
input[type=dropdown] select,textarea{
  width: 10%;
  padding: 0px;
  border: 1px solid #ccc;
  border-radius: 2px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 6px;
  resize: vertical;
}
</style>
<div class="container" id="form">
<form method="POST"  action="<?php  $this->geturl("save");?>" >
  <link rel="stylesheet" type="text/css" href="<?php ?>">
  
  <h2><u>Payment Details</u></h2>
    <div class = "form-group">
      <label>Name:-</label><br>
      <input type="text" name="payment[name]" align="center" value="<?php echo $payments->name; ?>" placeholder="payment Name" required="true"><br>
    </div>
    <div class = "form-group">
      <label>Code:-</label><br>
      <input type="text" name="payment[code]" value="<?php echo $payments->code; ?>" placeholder="payment code" required="true"><br>
    </div>  

     <div class = "form-group">
      <label>Status:-</label> <br>
      <select name="payment[status]"> 
        <?php
              foreach ($statusOption as $key => $value)
          {
                  echo "<option value='{$key}'";
                  if($payments->status == $key){echo "selected"; 
          
            }
                  echo ">{$value}</option>";
              }
          ?>
      </select><br> 
    </div>

    <div class = "form-group">
      <label>Description:-</label><br>
      <input type="text" name="payment[description]" value="<?php echo $payments->description; ?>" placeholder="Description of payment" required="true"><br>
    </div>  
    
   

    <div class = "form-group">
      <label>Created Date:-</label><br> 
      <input type="datetime-local" name="payment[createdDate]" value="<?php echo $payments->createdDate; ?>" placeholder="Created Date Of payment" required="true"><br><br>
    
    </div>

    <div class = "form-group">
      <input type="submit" name="submit" class="button save" id="submit" value="Add">
    </div>
</form> 
</div>

<?php 
$statusOption = [0 => 'Enabled', 1 => 'Disabled'];
    Mage::getController("Controller_Customer");
    $customers = $this->getCustomer();
  
    
?>
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

input[type=password], select, textarea {
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
</head>
<body ><br>
<h2><?php //echo $this->getTitle(); ?> </h2>


<div class="container" id="form">
<form method="POST"  action="<?php $this->geturl("save");?>" >
  
  <h2><u>Customer Details</u></h2>
    <div class = "form-group">
      <label>Firstname:-</label><br>
      <input type="text" name="customer[Firstname]" align="center" value="<?php echo $customers->firstname; ?>" placeholder="firstname" required="true"><br>
    </div>
    <div class = "form-group">
      <label>Lastname:-</label><br>
      <input type="text" name="customer[lastname]" value="<?php echo $customers->lastname; ?>" placeholder="Name of customer" required="true"><br>
    </div>  
    
    <div class = "form-group">
      <label>Email:-</label><br>
      <input type="text" name="customer[email]" value="<?php echo $customers->email; ?>" placeholder="email of customer" required='true'><br>
    </div>
    <div class = "form-group">
      <label>Password:-</label><br>
      <input type="password" name="customer[password]" value="<?php echo $customers->password; ?>" placeholder="Password" required="true"><br>
    </div>  
    
    <div class = "form-group">
      <label>Status:-</label> <br>
      <select name="customer[status]"> 
        <?php
              foreach ($statusOption as $key => $value)
          {
                  echo "<option value='{$key}'";
                  if($customers->status == $key){echo "selected"; 
          
            }
                  echo ">{$value}</option>";
              }
          ?>
      </select><br> 
    </div>

    <div class = "form-group">
      <label>Created Date:-</label><br> 
      <input type="datetime-local" name="customer[createdDate]" value="<?php echo $customers->createdDate; ?>" placeholder="Created Date Of customer" required="true"><br><br>
    
    </div>

    <div class = "form-group">
      <input type="submit" name="submit" class="button save" id="submit" value="Add">
    </div>
</form> 
</div>

</body>
</html>
 
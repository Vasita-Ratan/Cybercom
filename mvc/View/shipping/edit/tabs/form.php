<?php 
   $shippings = $this->getShipping();
   $statusOption = [0 => 'Enabled', 1 => 'Disabled'];
 
  
    
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
<form method="POST"  action="<?php  $this->geturl("save");?>" >
  
  <h2><u>shipping Details</u></h2>
    <div class = "form-group">
      <label>Name:-</label><br>
      <input type="text" name="shipping[name]" align="center" value="<?php echo $shippings->name; ?>" placeholder="shipping Name" required="true"><br>
    </div>
    <div class = "form-group">
      <label>Code:-</label><br>
      <input type="text" name="shipping[code]" value="<?php echo $shippings->code; ?>" placeholder="shipping code" required="true"><br>
    </div>  
    
    <div class = "form-group">
      <label>Amount:-</label><br>
      <input type="number" name="shipping[amount]" value="<?php echo $shippings->amount; ?>" placeholder="shipping amount" required='true'><br>
    </div>

     <div class = "form-group">
      <label>Status:-</label> <br>
      <select name="shipping[status]"> 
        <?php
              foreach ($statusOption as $key => $value)
          {
                  echo "<option value='{$key}'";
                  if($shippings->status == $key){echo "selected"; 
          
            }
                  echo ">{$value}</option>";
              }
          ?>
      </select><br> 
    </div>

    <div class = "form-group">
      <label>Description:-</label><br>
      <input type="text" name="shipping[description]" value="<?php echo $shippings->description; ?>" placeholder="Description of shipping" required="true"><br>
    </div>  
    
   

    <div class = "form-group">
      <label>Created Date:-</label><br> 
      <input type="datetime-local" name="shipping[createdDate]" value="<?php echo $shippings->createdDate; ?>" placeholder="Created Date Of shipping" required="true"><br><br>
    
    </div>

    <div class = "form-group">
      <input type="submit" name="submit" class="button save" id="submit" value="Add">
    </div>
</form> 
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>
</html>
 
<?php 

	$products = $this->getProduct(); 
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
<div class="container" id="form">
<form method="POST"  action="" >
	
	<h2><u>Product Details</u></h2>
		<div class = "form-group">
			<label>Sku:-</label><br>
			<input type="text" name="product[sku]" align="center" value="<?php echo $products->sku; ?>" placeholder="SKU of Product" required="true"><br>
		</div>
		<div class = "form-group">
			<label>Name:-</label><br>
			<input type="text" name="product[name]" value="<?php $products->name; ?>" placeholder="Name of Product" required="true"><br>
		</div>	
		
		<div class = "form-group">
			<label>Price:-</label><br>
			<input type="text" name="product[price]" value="<?php $products->price; ?>" placeholder="price of Product" required='true'><br>
		</div>
		<div class = "form-group">
			<label>Discount:-</label><br>
			<input type="text" name="product[discount]" value="<?php $products->discount; ?>" placeholder="Discount on Product" required="true"><br>
		</div>	
		
		<div class = "form-group">
			<label>Quantity:-</label><br>
			<input type="text" name="product[quantity]" value="<?php echo $products->quantity; ?>" placeholder="Quantity of Product" required="true"><br>
			
		</div>

		<div class = "form-group">
			<label>Description:-</label><br>
			<input type="text" name="product[description]" value="<?php echo $products->description; ?>" placeholder="Description of Product" required="true"><br>
		</div>	
		
		<div class = "form-group">
			<label>Status:-</label>	<br>
			<select name="product[status]">	
				<?php
        			foreach ($statusOption as $key => $value)
					{
            			echo "<option value='{$key}'";
            			if($products->status == $key){echo "selected"; 
						
						}
            			echo ">{$value}</option>";
    		   		}
    			?>
			</select><br>	
		</div>

		<div class = "form-group">
			<label>Created Date:-</label><br>	
			<input type="datetime-local" name="product[createdDate]" value="<?php echo $products->createdDate; ?>" placeholder="Created Date Of Product" required="true"><br><br>
		
		</div>

		<div class = "form-group">
			<input type="submit" name="submit" class="button save" id="submit" value="Add">
		</div>
</form>	
</div>
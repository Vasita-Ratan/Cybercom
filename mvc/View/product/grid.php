<?php 
Mage::getController("Controller_Product");
$products = $this->getProducts();
?>

<!-- <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #475659;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #1a1c1c;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
.active{


  font-size: 30px;
  background-color: #23302f;
    b
}
#logo{

    color: #417ea3;
    border-radius: 6px;
}

</style>
</head>
<body>

<div class="sidebar">
  <a id="active" class="active" href=><i id = "logo" class="fa fa-shopping-cart" aria-hidden="true">Questecom</i></a>
  <a href="#Customer">Home</a>
  <a href=<?php //echo $this->getUrl('grid','admin')?>>Admin</a>
  <a href=<?php //echo $this->getUrl('grid','customer')?>>customer</a>
  <a href=<?php //echo $this->getUrl('grid','customer group')?>>customer Group</a>
  <a href=<?php //echo $this->getUrl('grid','product')?>>Product</a>
  <a href=<?php //echo $this->getUrl('grid','category')?>>Category</a>
  <a href=<?php //echo $this->getUrl('grid','shipping')?>>Shipping</a>
  <a href=<?php //echo $this->getUrl('grid','payment')?>>Payment</a>
</div>

 -->
 <br>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  height: 50px;
  background-color: #475659;
  font-color:#fcfffc;
}
.topnav-right {
  overflow: hidden;
  background-color: #888c88;
  font-color:white;
}

.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 11px 11px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #a7b0a7;
  color:blue ;
}

.topnav a.active {
  background-color: #1a1c1c;
  color: white;
}

.topnav-right {
  float: right;
}

#icon{

  color: #debe7a;
}
.com{

  padding: 10,10,10,10;
  font-size: 25px;  
  color: white;
}
.font
{
    color: black;
}
#red{

  color: #64b3a3;
}

</style>
</head>
<body>
<div class="topnav">
    <a hrer="#"><div class="com"><i id = "red" class="fa fa-shopping-cart"aria-hidden="true"><b class="font">Questecom</i></div></a>
  <div class="topnav-right">
     <a href=<?php echo $this->getUrl('grid','admin')?>><i id="icon"  class="fa fa-user-circle-o" aria-hidden="true"><b class="font">Admin</b></i></a>

     <a href=<?php echo $this->getUrl('grid','customer')?>><i  id="icon" class="fa fa-user" aria-hidden="true"><b class="font">Customer</i></a>

     <a href=<?php echo $this->getUrl('grid','customer group')?>><i  id="icon" class="fa fa-users" aria-hidden="true"><b class="font">Customer Group</i></a>

     <a href=<?php echo $this->getUrl('grid','product')?>><i  id="icon" class="fa fa-pencil" aria-hidden="true"><b class="font">Product</i></a>

     <a href=<?php echo $this->getUrl('grid','category')?>><i  id="icon" class="fa fa-th-list" aria-hidden="true"><b class="font">Category</i></a>

     <a href=<?php echo $this->getUrl('grid','shipping')?>><i  id="icon" class="fa fa-truck" aria-hidden="true"><b class="font">Shipping</i></a>

     <a href=<?php echo $this->getUrl('grid','payment')?>><i  id="icon" class="fa fa-paypal" aria-hidden="true"><b class="font">Payment</i></a>
  </div>
</div><br>

</body>
</html>

<style>

table, th, td {
    border: 1px solid black;
    
  }
  th, td {
    padding: 10px;
    text-align: left;
  }
  #t01 tr:nth-child(even) {
    background-color: #eee;
  }
  #t01 tr:nth-child(odd) {
   background-color: #fff;
  }
  #t01 th {
    background-color: #34cdeb;
    color: black;
  }

.add{
  background-color: green; 
  border: none;
  color: white;
  width: 150px;
  padding: 5px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 1070px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  border-radius: 12px;

}
.status-Enabled
{
  background-color: red;
}
#pencil{

  border-radius: 7px;
  background-color: #c7300e;
  padding: 8px; 
  color: #0ec733;
}
#box{

  border-radius: 7px;
  background-color: #0a9186;
  padding: 8px;
  color: #c70e0e; 

}
</style>


<table id="t01" align="center" border="1" width="40%" height="40%">

	<thead>
    <a href="<?php echo "{$this->geturl("form", null, null, true)}"; ?>" ><button  class="add">Add Products</button></a>
		<tr>
			<th>ID</th>
			<th>SKU</th>
			<th>Name</th>
			<th>Price</th>
			<th>Discount</th>
			<th>Quantity</th>
			<th>Description</th>
			<th>Status</th>
			<th>Created Date</th>
      <th>Updated Date</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
        <?php
         
        foreach($products as $key=>$value){
         
          
          ?>
         <tr>
              <td><?php echo $value->productId; ?></td>
              <td><?php echo $value->sku; ?></td>
              <td><?php echo $value->name; ?></td>
              <td><?php echo $value->price; ?></td>
              <td><?php echo $value->discount; ?></td>
              <td><?php echo $value->quantity; ?></td>
              <td><?php echo $value->description; ?></td>
              <td><?php if($value->status == 0){echo "Enabled";} else {echo "Disabled"; } ?></td>
              <td><?php echo $value->createdDate; ?></td>
              <td><?php echo $value->updatedDate; ?></td>
              <td><a href="<?php echo "{$this->geturl("form", null, ['id' => $value->productId], true)}"; ?>" ><i id ="pencil" class="fa fa-pencil" aria-hidden="true" bgcolor="green"></i></a>
              <a href="<?php echo "{$this->geturl("delete", null, ['id' => $value->productId], true)}"; ?>" ><i id = "box" class="fa fa-trash" aria-hidden="true"></i></a></td>
          </tr>
          <?php

        }

        ?>

	</tbody>
</table>


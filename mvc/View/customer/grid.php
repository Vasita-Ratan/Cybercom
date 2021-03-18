<?php 
Mage::getController('Controller_Customer');
$customers = $this->getCustomers();
?>

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
    align-content: center;
    
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
  margin: 4px 1120px;
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
<br>
<h1><?php //echo $this->getTitle(); ?> </h1>

 <a href="<?php echo "{$this->geturl("form", null, null, true)}"; ?>" ><button  class="add">Add Customer</button></a>
<table id="t01" align="center" border="1">
    <thead>
    <tr>
      <th>ID</th>
      <th>FirstName</th>
      <th>LastName</th>
      <th>Email</th>
      <th>Password</th>
      <th>Status</th>
      <th>Created Date</th>
      <th>Updated Date</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
        <?php
    
            foreach($customers as $key=>$value){
        ?>
         <tr>
              <td><?php echo $value->customerId;?></td>
              <td><?php echo $value->firstname; ?></td>
              <td><?php echo $value->lastname; ?></td>
              <td><?php echo $value->email; ?></td>
              <td><?php echo $value->password; ?></td>
              <td><?php if($value->status == 0){echo "Enabled";} else {echo "Disabled"; } ?></td>
              <td><?php echo $value->createdDate; ?></td>
              <td><?php echo $value->updatedDate; ?></td>
              <td><a href="<?php echo "{$this->geturl("form", null, ['id' => $value->customerId], true)}"; ?>" ><i id ="pencil" class="fa fa-pencil" aria-hidden="true"></i></a>
              <a href="<?php echo "{$this->geturl("delete", null, ['id' => $value->customerId], true)}"; ?>" ><i id ="box" class="fa fa-trash" aria-hidden="true"></i></a></td>
          </tr>
          <?php

        }

        ?>

  </tbody>
</table>



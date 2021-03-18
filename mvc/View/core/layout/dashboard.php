<!DOCTYPE html>
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
  <a href=<?php echo $this->getUrl('grid','admin')?>>Admin</a>
  <a href=<?php echo $this->getUrl('grid','customer')?>>customer</a>
  <a href=<?php echo $this->getUrl('grid','customer group')?>>customer Group</a>
  <a href=<?php echo $this->getUrl('grid','product')?>>Product</a>
  <a href=<?php echo $this->getUrl('grid','category')?>>Category</a>
  <a href=<?php echo $this->getUrl('grid','shipping')?>>Shipping</a>
  <a href=<?php echo $this->getUrl('grid','payment')?>>Payment</a>
</div> -->

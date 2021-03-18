<?php

  $media = $this->getMedia(); 

?>

<style type="text/css">
  
 
 .table-responsive
 {
  background-color:#fafffb;
 }
 .button {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
}
.name-r1{
    background-color: green;
}

 .save {background-color: #008CBA;} 
</style>
<body>

 <div class="container">  
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr></tr>
      <tr>
        <th>Image</th>
        <th>Label</th>
        <th>Small</th>
        <th>Thumb</th>
        <th>Base</th>
        <th>Gallery</th>  
        <th>Remove</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
          
      <tr>
          <td><input  type="Image" name="image" ></td>
          <td><input id="lbl" type="text" name="Label"></td>
          <td><input  type="radio" name="r1" value="small"></td>
          <td><input  type="radio" name="r1" value="thumb" ></td>
          <td><input  type="radio" name="r1" ></td>
          <td><input class="ch1" type="checkbox" name="gallery"></td>
          <td><input class="ch2" type="checkbox" name="remove" ></td>

      </tr>
      <tr>
        <td><input type="file" name="image"></td>

      </tr>
    </tbody>
  </table>


  </div>
     <button class="button save" onclick="FileUpload()" >Upload</button> 
  </div>



<script type="text/javascript">
  function FileUpload() {
      event.preventDefault();
      document.getElementById('form').action = '<?echo base_url().'http://localhost/Questecom/index.php?c=product&a=form&tab=media';?>';
    document.getElementById('form').submit();

  }
  
  

</script>




<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<!-- jQuery library -->
<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php

include 'navbar.php';
?>

<div class="jumbotron" style="background-color:salmon;color:black;">
  <div class="container">
    <h1>Product Insert</h1>
  </div>
</div>
    <form action="productinsert1.php" method="post" enctype="multipart/form-data" class="container">
        <div class="row">
            <div class="form-group col-ld-10">
                <input type="text"  class="form-control" id="text" placeholder="Enter Product ID" name="txtpid" >
            </div>
        </div>
        <div class="row">
            <div class="form-group col-ld-10">
                <input type="text"  class="form-control" id="text" placeholder="Enter Product Name" name="txtpname" >
            </div>
        </div>
        <div class="row">
            <div class="form-group col-ld-10">
                <input type="text"  class="form-control" id="text" placeholder="Enter Product Color" name="txtpcolor" >
            </div>
        </div>
         <div class="row">
            <div class="form-group col-ld-10">
                <input type="text"  class="form-control" id="text" placeholder="Enter Product Price" name="txtpprice" >
            </div>
        </div>
         <div class="row">
            <div class="form-group col-ld-10">
                <input type="text"  class="form-control" id="text" placeholder="Enter Product Manufacturer" name="txtpmanu" >
            </div>
        </div>
         <div class="row">
            <div class="form-group col-ld-10">
                <input type="number"  class="form-control" id="text" placeholder="Enter Product Warranty(Years)" name="txtpwarranty" >
            </div>
        </div>
         <div class="row">
            <div class="form-group col-ld-10">
                <input type="text"  class="form-control" id="text" placeholder="Enter Stock On Hand" name="txtpsoh" >
            </div>
        </div>
         <div class="row">
            <div class="form-group col-ld-10">
                <input type="file"  id="text" name="pimg" >
            </div>
        </div>
        <div class="row">
            <div class="form-group col-ld-10">
                <input type="text" class="form-control" id="text" placeholder="Description" name="txtdesc" >
            </div>
        </div>
         <div class="row">
            <div class="form-group col-ld-10">
                <input type="text" class="form-control" id="text" placeholder="Cat id" name="fk_cat_id" >
            </div>
        </div>
        <div class="row">
          <center><input type="submit" class="btn btn-success btn-lg"  name="btnsubmit" value="Submit"><a href="productinsert1.php"></center>
        </div>
    </form>
  
</body>
</html>
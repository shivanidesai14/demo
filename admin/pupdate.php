
<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'navbar.php';
$_pid=$_GET["id"];
require 'productdb.php';
$obj=new database;
$result=$obj->getpro($_pid);
$row=$result->fetch_assoc();
$_pid=$row["pid"];
$_pname=$row["pname"];
$_pcolor=$row["pcolor"];
$_prize=$row["prize"];
$_manu=$row["manu"];
$_warr=$row["warr"];
$_soh=$row["soh"];
$_image=$row["image"];
$_des=$row["des"];
$_fk_cat_id=$row["fk_cat_id"];

?>
<div class="jumbotron" style="background-color:salmon;color:black;">
  <div class="container">
    <h1>Product Update</h1>
  </div>
</div>

 <form action="productupdate.php?img=<?php echo $_image; ?>" method="post" class="container" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-ld-10">
                <input type="text" value="<?php echo $_pid; ?>" class="form-control" id="text" placeholder="Enter Product ID" name="txtpid" >
            </div>
        </div>
        <div class="row">
            <div class="form-group col-ld-10">
                <input type="text" value="<?php echo $_pname; ?>"  class="form-control" id="text" placeholder="Enter Product Name" name="txtpname" >
            </div>
        </div>
        <div class="row">
            <div class="form-group col-ld-10">
                <input type="text" value="<?php echo $_pcolor; ?>"  class="form-control" id="text" placeholder="Enter Product Color" name="txtpcolor" >
            </div>
        </div>
         <div class="row">
            <div class="form-group col-ld-10">
                <input type="text" value="<?php echo $_prize ?>"  class="form-control" id="text" placeholder="Enter Product Price" name="txtpprice" >
            </div>
        </div>
         <div class="row">
            <div class="form-group col-ld-10">
                <input type="text" value="<?php echo $_manu; ?>"  class="form-control" id="text" placeholder="Enter Product Manufacturer" name="txtpmanu" >
            </div>
        </div>
         <div class="row">
            <div class="form-group col-ld-10">
                <input type="number" value="<?php echo $_warr; ?>" class="form-control" id="text" placeholder="Enter Product Warranty(Years)" name="txtpwarranty" >
            </div>
        </div>
         <div class="row">
            <div class="form-group col-ld-10">
                <input type="text" value="<?php echo $_soh; ?>"  class="form-control" id="text" placeholder="Enter Stock On Hand" name="txtpsoh" >
            </div>
        </div>
         <div class="row">
            <div class="form-group col-ld-10">
                <img src="<?php echo $_image; ?>"style="height:200px;width:200px;">
                <input type="file" name="txtpimg" >
            </div>
        </div>
        <div class="row">
            <div class="form-group col-ld-10">
                <input type="text" value="<?php echo $_des; ?>"class="form-control" id="text" placeholder="Description" name="txtdesc" >
            </div>
        </div>
         <div class="row">
            <div class="form-group col-ld-10">
                <input type="text" value="<?php echo $_fk_cat_id; ?>" class="form-control" id="text" placeholder="Cat id" name="fk_cat_id" >
            </div>
        </div>
        <div class="row">
          <center><input type="submit" class="btn btn-success btn-lg"  name="btnsubmit" value="Submit"></center>
        </div>
    </form>
</body>
</html>
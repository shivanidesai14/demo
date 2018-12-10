<html>
<head>
<script src="js/jquery-3.2.1.min.js"></script>
<!-- latest complied and minified css-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!--optional theme-->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<!-- latest complied and minified javascript-->
<script src="js/bootstrap.min.js"></script>
</head>
<?php include 'adminmenu.php';?>
<body class="container">
<h1><center>Upadte product</h1></center><br><br>
<?php
       $_pid=$_GET["id"];
     require 'connectcode.php';
      $obj=new bag;
       $result=$obj->Update1Product($_pid);
     $row=$result->fetch_assoc();
       $_pid=$row["pid"];
 $_name=$row["pname"];
$_color=$row["colour"];
 $_price=$row["price"];
 $_menuf=$row["manufecture"];
 $_warr=$row["warranty"];
 $_soh=$row["stock_on_hand"];
 $_pimg=$row["pimg"];

?>
<form method="post" action="productupd.php">
<div class="form-group">
<div class="row">
<div class="col-md-1"><h4></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">product id</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtpid" value="<?php echo $_pid;?>"></div></div>
<div class="row">
<div class="col-md-1"><h4></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">product name</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtpname" value="<?php echo $_name;?>"></div></div>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-3"><h4><span class="lable-lable-info">colour</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtcolor"  value="<?php echo $_color;?>"></div></div>
<div class="row">
<div class="col-md-1"></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">price</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtprice"  value="<?php echo $_price;?>"></div></div>
<div class="row">
<div class="col-md-1"><h4></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">manufecture</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtpmenuf" value="<?php echo $_menuf;?>"></div></div>
<div class="row">
<div class="col-md-1"><h4></span></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">warranty</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtwarr" value="<?php echo $_warr;?>"></div></div>
<div class="row">
<div class="col-md-1"><h4></span></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">stock on hand</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtsoh"  value="<?php echo $_soh;?>"></div></div>
<div class="row">
<div class="col-md-1"></span></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">product img</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtpimg" value="<?php echo $_pimg;?>"></div></div>
<div class="row">
<br><br><br>
<div class="col-md-12"><center><input type="submit" name="btnin" value="Update" class="btn btn-primary"></center></div></div>
</div>
</form>
</body>
</html>

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
       $_cid=$_GET["id"];
     require 'connectcode.php';
      $obj=new bag;
       $result=$obj->catupdate($_cid);
     $row=$result->fetch_assoc();
       $_cid=$row["cat_id"];
 $_name=$row["cat_name"];
?>
<form method="post" action="catupdate1.php">
<div class="form-group">
<div class="row">
<div class="col-md-1"><h4></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">category id</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtcid" value="<?php echo $_cid;?>"></div></div>
<div class="row">
<div class="col-md-1"><h4></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">category name</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtname" value="<?php echo $_name;?>"></div></div>
<div class="row">
<br><br><br>
<div class="col-md-12"><center><input type="submit" name="btnin" value="Update" class="btn btn-primary"></center></div></div>
</div>
</form>
</body>
</html>

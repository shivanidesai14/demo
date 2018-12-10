<?php
session_start()?>
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
<?php
include 'menubar.php';
?>
<h1><center>edit profile</h1></center>
<body class="container">

<?php
if($_SESSION["email"]== "" and $_SESSION["email"]==null)
{
  header('location:login.php');
}
$_email=$_SESSION["email"];
require 'connectcode.php';
      $obj=new bag;
       $result=$obj->getuser($_SESSION["email"]);

$row=$result->fetch_assoc();
$_name=$row["name"];
$_pass=$row["password"];
 $_mobile=$row["mobile_no"];
 $_add=$row["address"];
  $_gen=$row["gender"];
 $_img=$row["image"];
    ?>
<form method="post" action="editpro1.php">
<div class="form-group">
<div class="row">
<div class="col-md-1"><h4><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">Email</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtemail" value="<?php echo $_email; ?>"></div></div>
<div class="row">
<div class="col-md-1"><h4><span class="glyphicon glyphicon-user" aria-hidden="true"></span></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">Name</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtname" value="<?php echo $_name; ?>"></div></div>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-3"><h4><span class="lable-lable-info">Password</span></h4></div>
<div class="col-md-5"><input type="password"  class="form-control" name="txtpass" value="<?php echo $_pass; ?>"></div></div>
<div class="row">
<div class="col-md-1"><h4><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">Mobile no</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtmobile" value="<?php echo $_mobile; ?>"></div></div>
<div class="row">
<div class="col-md-1"><h4><span class="glyphicon glyphicon-home" aria-hidden="true"></span></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">address</span></h4></div>
<div class="col-md-5">  <textarea name="txtadd" class="form-control"><?php echo $_add; ?></textarea></div></div>
<div class="row">
<div class="col-md-1"></span></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">Image</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtimg" value="<?php echo $_img; ?>"></div></div>
<div class="row">
<div class="col-md-1"></span></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">Gender</span></h4></div>
<div class="col-md-8"><input type="radio" name="gender" value="female" <?php if($_gen=="female"){echo "checked";}?>>female<br>
<input type="radio" name="gender" value="male" <?php if($_gen=="male"){echo "checked";}?>>male
<center><div class="row">
<br><br><br>
<div class="col-md-5"><input type="submit" name="btnin" value="UPDATE" class="btn btn-primary"></div></center>
</div>

</form>
</body>
</html>
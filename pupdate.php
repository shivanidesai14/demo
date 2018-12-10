
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="js/bootstrap.min.js"></script>
<style>
h1
{
  background-color: black;
      color:white !important;
      text-align: center;
      font-size: 30px;
}
</style>
</head>
<body>
<?php
include 'navbar.php';

?>
<?php

$_email= $_SESSION["uname"];
require 'database.php';
$obj=new database;
$result=$obj->profile($_email);
$result=$cnn->query($sql);
$row=$result->fetch_assoc();
$_name=$row["name"];
$_pass=$row["password"];
$_mob=$row["mobile"];
$_add=$row["address"];
$_img=$row["image"];
$_gender=$row["gender"];
?>

<form method="post" action="profileupdate.php">

<div class="jumbotron text-center" style="background-color:black;" class="btn btn-primary">
  <h1>Update Your Data</h1>
</div>
<div class="form-group container">
   <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="email" type="text" class="form-control" name="txtemail" value="<?php echo $_email; ?>" placeholder="Email">
  </div>
  </div>
  <div class="form-group container" >
    <div class="input-group">
    <span class="input-group-addon">@</span>
    <input id="msg" type="text" class="form-control" name="txtname" value="<?php echo $_name; ?>" placeholder="Username" >
  </div>
  </div>
   <div class="form-group container">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="txtpass" value="<?php echo $_pass; ?>" placeholder="Password">
  </div>
  </div>
   <div class="form-group container">
   <div class="input-group">
    <span class="input-group-addon">+91</span>
    <input  type="text" class="form-control" name="txtmob" value="<?php echo $_mob; ?>" placeholder="Mobile No" >
  </div>
  </div>
   <div class="form-group container">
    <div>

    <textarea class="form-control" rows="5" name="txtadd"  placeholder="Address"><?php echo $_add; ?></textarea>
    </div>
  </div>
 <div class="form-group container">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
    <input  type="text" class="form-control" name="txtimg" value="<?php echo $_img; ?>" placeholder="Image" >
  </div>
  </div>
   <div class="form-group container">
  <div class="radio">
  <label><input type="radio" name="rbt1" <?php if($_gender=="male"){ echo "checked";} ?> value="male">Male</label>
   <label><input type="radio" name="rbt1" <?php if($_gender=="female"){ echo "checked";} ?> value="female">Female</label>
</div>
</div>
<center><input type="submit" class="btn btn-success btn-lg" name="btnupdate" value="Update Record"></center> 

</form>
</body>
</html>
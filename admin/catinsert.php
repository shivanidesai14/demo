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

?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<div class="jumbotron" style="background-color:salmon;color:black;">
  <div class="container">
    <h1>Cat Insert</h1>
  </div>
</div>
 <div class="form-group container">
              <label for="usrname">Cat id</label>
              <input type="text" class="form-control" name="txtid" id="usrname" placeholder="Enter id">
   </div>
  <div class="form-group container" >
   <label for="username">Cat name</label>
    <input type="text" class="form-control" name="txtname" id="psw" placeholder="Enter name">
  </div>

  <div class="form-group container">
   
<center><input type="submit" class="btn btn-success btn-lg btn btn-block"  name="btninsert" value="Insert"></center>
</div>
</form>
<?php
if(isset($_POST["btninsert"]))
{
$_id=$_POST["txtid"];
$_name=$_POST["txtname"];
require 'catdb.php';
$obj=new database();
$result=$obj->catinsert($_id,$_name);
if($result===TRUE)
{
    header('location:catdisplay.php');
}
else
{
    echo "not inserted";
}
}
?>
</body>
</html>
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
  .modal-header, h1,h2 .close {
      background-color: black;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
<body>
<?php
include 'navbar.php';

?>
<form method="post" action="changepassword.php">

<div class="jumbotron text-center" style="background-color:black;" class="btn btn-primary">
  <h1>Change Password</h1>
 
</div>
 <div class="form-group container">
              <label for="psw"></span>Old Password</label>
              <input type="pass" class="form-control" name="oldpassword" id="usrname" placeholder="Enter Old Password">
   </div>
  <div class="form-group container" >
   <label for="psw">New Password</label>
              <input type="password" class="form-control" name="newpassword" id="psw" placeholder="Enter New Password">
  </div>
  <div class="form-group container" >
   <label for="psw">Confirm Password</label>
              <input type="password" class="form-control" name="conpassword" id="psw" placeholder="Enter Confirm Password">
  </div>
  <center><input type="submit" class="btn-lg btn btn-success" name="btnsubmit"  value="Change Password"></center>
</body>
</html>
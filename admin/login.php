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
  </head>
<body>
<?php
if(isset($_POST["btnlogin"]))
{



$_u=$_POST["txtuname"];

$_p=$_POST["txtpassword"];
require 'dbadmin.php';
$obj=new database();
$result=$obj->Login($_u,$_p);

//require 'database.php';
//$obj=new database();
//$result=$obj->login($_u,$_p);
//$cnn=new mysqli("localhost","root","","demo");
//$sql="select * from user_tbl where 	email='". $_u ."' and password='". $_p ."' ";
//$result=$cnn->query($sql);
if($result->num_rows===1)

{
    $_SESSION["uname"]=$_POST["txtuname"];
    header('location:product.php');
 
// echo "login succesfull"; //if aa kru to successfull thai jae but header vali comment nikad dau to ee direct nai krtu error btave
}
else
{
  echo "<h1>Username or Password is Incorrect</h1>";
}

}


?>
 <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

<div class="jumbotron text-center" style="background-color:black;" class="btn btn-primary">
  <h1><span class="glyphicon glyphicon-lock"></span> Login</h1>
 
</div>
 <div class="form-group container">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="txtuname" id="usrname" placeholder="Enter email">
   </div>
  <div class="form-group container" >
   <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="txtpassword" id="psw" placeholder="Enter password">
  </div>
   
  
<div class="form-group container">
   
<center><input type="submit" class="btn btn-success btn-lg btn btn-block"  name="btnlogin" value="Login"></center>


 
 
</form>
</body>
</html>

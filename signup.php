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
if(isset($_POST["btninsert"]))
{
$_email=$_POST["txtemail"];
$_name=$_POST["txtname"];
$_pass=$_POST["txtpass"];
$_mob=$_POST["txtmob"];
$_add=$_POST["txtadd"];
$_img=$_POST["txtimg"];
$_gender=$_POST["rbt1"];
echo $_email;
echo $_add;
require 'database.php';
$obj=new database();
$result=$obj->Signup($_email,$_name,$_pass,$_mob,$_add,$_img,$_gender);
if($result===TRUE)
{
      

     $_SESSION["uname"]=$_POST["txtname"]; 
    header('location:productdisplay.php');

}
else
{
    echo "<h2>Account Not Created<h2>";
}
}

if(isset($_POST["btnlogin"]))
{



$_u=$_POST["txtuname"];

$_p=$_POST["txtpassword"];
require 'database.php';
$obj=new database();
$result=$obj->Login($_u,$_p);

//require 'database.php';
//$obj=new database();
//$result=$obj->login($_u,$_p);
//$cnn=new mysqli("localhost","root","","demo");
//$sql="select * from user_tbl where 	email='". $_u ."' and password='". $_p ."' ";
//$result=$cnn->query($sql);
if($result->num_rows==1)

{
    $_SESSION["uname"]=$_POST["txtuname"];
    header('location:productdisplay.php');
 
// echo "login succesfull"; //if aa kru to successfull thai jae but header vali comment nikad dau to ee direct nai krtu error btave
}
else
{
  echo $sql;
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
  <div class="form-group container" >
   <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="number" class="form-control" name="txtmob"  placeholder="Enter password">
  </div>
   
  
<div class="form-group container">
   
<center><input type="submit" class="btn-lg btn btn-block btn  btn-success" name="btnlogin"  value="Login"></center>

<br><h3><center>OR</center></h3>
 
  </div>

<div class="container">
  <!-- Trigger the modal with a button -->
  <div class="form-group container">
  
<center><button type="button" name="btninsert"class="btn-lg btn btn-block btn  btn-primary"  id="myBtn">Not a member???Sign Up</button></center>;
<div class="modal-footer">
          <p><h3>Forgot <a href="fpassword.php">Password?</a></h3></p>
 </div>
     
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2><span class="glyphicon glyphicon-user"></span>Sign Up</h2>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form-group">
   <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="email" type="text" class="form-control" name="txtemail" placeholder="Email">
  </div>
  </div>
  <div class="form-group" >
    <div class="input-group">
    <span class="input-group-addon">@</span>
    <input id="msg" type="text" class="form-control" name="txtname" placeholder="Username" >
  </div>
  </div>
   <div class="form-group">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
    <input type="password" class="form-control" name="txtpass" placeholder="Password">
  </div>
  </div>
   <div class="form-group">
   <div class="input-group">
    <span class="input-group-addon">+91</span>
    <input  type="text" class="form-control" name="txtmob"placeholder="Mobile No" >
  </div>
  </div>
   <div class="form-group">
    <div>

    <textarea class="form-control" rows="5" name="txtadd" placeholder="Address..."></textarea>
    </div>
  </div>
 <div class="form-group">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
    <input  type="text" class="form-control" name="txtimg"placeholder="Image" >
  </div>
  </div>
   <div class="form-group">
  <div class="radio">
  <label><input type="radio" name="rbt1"  value="male">Male</label>
   <label><input type="radio" name="rbt1"  value="female">Female</label>
</div>
</div>
  <button type="submit" name="btninsert" class="btn btn-block" style="background-color:black;color:white;">Sign Up</button>

        <div class="modal-footer">
          <p>ALready a member???<a href="signup.php">Login</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

  
</div>
 
 
</form>
</body>
</html>


$raandom_alpha=md5(rand());
$token=substr($raandom_alpha,0,6);
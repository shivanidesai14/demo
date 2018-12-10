<?php
session_start();
?>
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
include 'menubar.php'
?>
    
    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<h1><center>login</h1></center>
<body class="container">

<form method="post" action="<?php
echo $_SERVER["PHP_SELF"]; ?> ">
<div class="form-group">
<div class="row">
<div class="col-md-1"><h4><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">Email</span></h4></div>
<div class="col-md-5"><input type="email"  class="form-control" require name="txtemail"></div></div>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-3"><h4><span class="lable-lable-info">Password</span></h4></div>
<div class="col-md-5"><input type="password"  class="form-control" name="txtpass"></div></div>
<div class="row">
<br><br><br>
<div ><center><input type="submit" name="btnin" value="login" class="btn btn-primary"></div></center>


</div>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

 $_email=$_POST["txtemail"];
 $_pass=$_POST["txtpass"];
 
    if(isset($_POST["btnin"]))
    {
      require 'connectcode.php';
      $obj=new bag;
       $result=$obj->login($_email,$_pass);//function calling from connectcode.php
       if($result->num_rows == 1)
     {
             ?> <span><div class="alert alert-success" role="alert">login sucessfully</div></span>
<?php
             $_SESSION["email"]=$_email;
            header('location:product.php');
     }
     else
     {
   ?> <br><br><br><span><div class="alert alert-danger" role="alert">login is not sucessfully</div></span>
<?php
     }
    }
}
    ?>

</body>
</html>
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
<h1><center>SIGN UP</h1></center>

<body class="container">
<?php 

$errshow="hidden";
       $errmsg="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 $_email=$_POST["txtemail"];
 $_name=$_POST["txtname"];
$_pass=$_POST["txtpass"];
 $_mobile=$_POST["txtmobile"];
 $_add=$_POST["txtadd"];
  $_gen=$_POST["gender"];
 $_img=$_POST["txtimg"];

        //if($_SERVER["REQUEST_METHOD"] == "POST")
     if(empty($_POST["txtemail"]) or empty($_POST["txtpass"]) or empty($_POST["txtmobile"]) or empty($_POST["txtname"]))
        {         
          $errmsg="fill out all the empty fields";
          $errshow=" " ;
            }
            else if(!preg_match("/^[0-9]*$/",$_POST["txtmobile"]) or strlen($_POST["txtmobile"])!=10)
            {
              $errmsg="enter proper mobile no";
              $errshow=" " ;
            }
            else
            {
                if(isset($_POST["btnin"]))
            {
 require 'connectcode.php';
      $obj=new bag;
       $result=$obj->updateuser($_email,$_name,$_pass,$_mobile,$_add,$_img,$_gen);

if($result===true)
{
    ?> <span><div class="alert alert-success" role="alert">record  insert sucessfully</div></span>
<?php
//header('location:login.php');
}
else
{
 ?><div class="row"><div class="alert alert-danger" role="alert">record not insert sucessfully</div></div>
<?php
}
}
            }
    }
?>
<form method="post" action="<?php
echo $_SERVER["PHP_SELF"]; ?> ">
<div class="form-group">
<div class="row">
<div class="col-md-1"><h4><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">Email</span></h4></div>
<div class="col-md-5"><input type="email"  require class="form-control" name="txtemail"></div></div>
<div class="row">
<div class="col-md-1"><h4><span class="glyphicon glyphicon-user" aria-hidden="true"></span></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">Name</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtname"></div></div>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-3"><h4><span class="lable-lable-info">Password</span></h4></div>
<div class="col-md-5"><input type="password"  class="form-control" name="txtpass"></div></div>
<div class="row">
<div class="col-md-1"><h4><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">Mobile no</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtmobile"></div></div>
<div class="row">
<div class="col-md-1"><h4><span class="glyphicon glyphicon-home" aria-hidden="true"></span></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">address</span></h4></div>
<div class="col-md-5">  <textarea name="txtadd" class="form-control"></textarea></div></div>
<div class="row">
<div class="col-md-1"></span></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">Image</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtimg"></div></div>
<div class="row">
<div class="col-md-1"></span></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">Gender</span></h4></div>
<div class="col-md-8"><input type="radio" name="gender" value="female"  checked>female<br>
<input type="radio" name="gender" value="male">male</div>
<div class="row">
<br><br><br><center>
<div ><input type="submit" name="btnin" value="INSERT" class="btn btn-primary"></div></center>
</div>
<div class="row" <?php echo $errshow; ?>>
<br><div  class="alert alert-danger" role="alert"><?php echo $errmsg; ?> </div> </div>
</div>
</form>
</body>
</html>
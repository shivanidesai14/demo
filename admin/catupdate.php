<?php
require 'catdb.php';

?>
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
$_catid="";
$_catname="";
$_catid=$_GET["id"];
$obj=new database();
$result=$obj->getcat($_catid);
$row=$result->fetch_assoc();
$_catid=$row["cat_id"];
$_catname=$row["cat_name"];
if($_SERVER["REQUEST_METHOD"]=="POST")
 {

 $_catid=$_POST["catid"];
$_catname=$_POST["catname"];
$obj1=new database();
$result1=$obj1->catupdate($_catname,$_catid);
   
    if($result1===TRUE)
    {

        header('location:catdisplay.php');

    }
    else
    {
       
         echo " not succesfully";


        }



 }


?>
<form method="post" action="">
<div class="jumbotron" style="background-color:salmon;color:black;">
  <div class="container">
    <h1>Cat Update</h1>
  </div>
</div>
<div class="form-group container">
              <label for="usrname">Cat Id</label>
              <input type="text" class="form-control" name="catid" value=<?php echo $_catid; ?>>
</div>
 <div class="form-group container">
              <label for="usrname">Cat Name</label>
              <input type="text" name="catname" class="form-control" value=<?php echo $_catname; ?>>
</div>
<center><input type="submit" class="btn btn-success btn-lg"  name="btnsubmit" value="Submit"></center>


</form>

</body>
</html>
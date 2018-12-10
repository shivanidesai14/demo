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
    <h1>News Insert</h1>
  </div>
</div>
</div>
 <div class="form-group container">
              <label for="usrname">News Id</label>
              <input type="text" class="form-control" name="newsid" id="usrname" placeholder="Enter Id">
   </div>
 <div class="form-group container">
              <label for="usrname">News Title</label>
              <input type="text" class="form-control" name="newstitle" id="usrname" placeholder="Enter Title">
   </div>
 <div class="form-group container">
              <label for="usrname">News Desc</label>
              <input type="text" class="form-control" name="newsdesc" id="usrname" placeholder="Enter Desc">
   </div>
 <div class="form-group container">
              <label for="usrname">News Date</label>
              <input type="text" class="form-control" name="newsdate" id="usrname" placeholder="Enter Date">
   </div>
 <div class="form-group container">
              <label for="usrname">News Image</label>
              <input type="text" class="form-control" name="newsimg" id="usrname" placeholder="Image">
   </div>
 <div class="form-group container">
              <label for="usrname">User Id</label>
              <input type="text" class="form-control" name="newsuid" id="usrname" placeholder="Enter User Id">
   </div>
<center><input type="submit" class="btn btn-success btn-lg"  name="btnsubmit" value="Submit"></center>

</form>
<?php

 if($_SERVER["REQUEST_METHOD"]=="POST")
 {

     $_newsid=$_POST["newsid"];
$_newstitle=$_POST["newstitle"];
$_newsdesc=$_POST["newsdesc"];
$_newsdate=$_POST["newsdate"];
$_newsimg=$_POST["newsimg"];
$_newsuid=$_POST["newsuid"];

    require 'newsdb.php';
    $obj=new database;
   $result= $obj->newsinsert($_newsid,$_newstitle,$_newsdesc,$_newsdesc,$_newsdate,$_newsimg,$_newsuid);
    if($result===TRUE)
    {

        echo "succesfully";
    }
    else
    {
         echo $sql;
         echo " not succesfully";


     }



 }

?>
</body>
</html>



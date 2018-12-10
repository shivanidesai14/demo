<?php
require 'newsdb.php';

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
$_newsid="";
$_newstitle="";
$_newsdesc="";
$_newsimg="";
$_newsdate="";
$_newsuid="";
$_newsid=$_GET["id"];

$obj=new database();
$result=$obj->getnews($_newsid);
$row=$result->fetch_assoc();
$_newstitle=$row["news_title"];
$_newsdesc=$row["news_desc"];
$_newsimg=$row["news_img"];
$_newsdate=$row["news_date"];
if($_SERVER["REQUEST_METHOD"]=="POST")
 {

     $_newsid=$_POST["newsid"];
$_newstitle=$_POST["newstitle"];
$_newsdesc=$_POST["newsdesc"];
$_newsdate=$_POST["newsdate"];
$_newsimg=$_POST["newsimg"];
$_newsuid=$_POST["newsuid"];

$obj1=new database();
$result1=$obj1->newsupdate($_newstitle,$_newsdesc,$_newsdate,$_newsimg,$_newsuid,$_newsid);
   
    if($result1===TRUE)
    {

        header('location:newsdisplay.php');

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
    <h1>News Update</h1>
  </div>
</div>
<div class="form-group container">
              <label for="usrname">News Id</label>
              <input type="text" class="form-control" name="newsid" value=<?php echo $_newsid; ?>>
</div>
 <div class="form-group container">
              <label for="usrname">News Title</label>
              <input type="text" name="newstitle" class="form-control" value=<?php echo $_newstitle; ?>>
</div>
<div class="form-group container">
              <label for="usrname">News Desc</label>
            <input type="text" class="form-control" name="newsdesc" value=<?php echo $_newsdesc; ?>>
</div>
 <div class="form-group container">
              <label for="usrname">News Date</label>
            <input type="text" class="form-control" name="newsdate" value=<?php echo $_newsdate; ?>>
</div>
<div class="form-group container">
              <label for="usrname">News Image</label>
              <input type="text"class="form-control" name="newsimg" value=<?php echo $_newsimg; ?>>
</div>
<div class="form-group container">
              <label for="usrname">User Id</label>
<input type="text" class="form-control" name="newsuid" value=<?php echo $_newsuid; ?>>
</div>
<center><input type="submit" class="btn btn-success btn-lg"  name="btnsubmit" value="Submit"></center>


</form>

</body>
</html>



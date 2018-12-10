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
include 'adminmenu.php';
?>
<body class="container">
<center><h1>Insert Category</h1></center><br><br><br>
<form method="post" action="<?php
echo $_SERVER["PHP_SELF"]; ?> ">
<div class="form-group">
<div class="row">
<div class="col-md-1"><h4></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">category name</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtname" ></div></div>
<div class="row">
<br><br><br>
<div class="col-md-12"><center><input type="submit" name="btnin" value="Insert" class="btn btn-primary"></center></div></div>
</div>
</div>
</form>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    $_name=$_POST["txtname"];
    
    if(isset($_POST["btnin"]))
    {
        require 'connectcode.php';
      $obj=new bag;
       $result=$obj->CategoryInsert($_name);
if($result===true)
{
    echo "record inserted suseesfully";
}
else
{
echo "record inserted not suseesfully";
echo $result;
}
}
}
?>

</body>
</html>
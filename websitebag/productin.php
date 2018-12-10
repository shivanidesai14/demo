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
<?php include 'adminmenu.php';?>
<body class="container">
<h1><center>Insert product</h1></center><br><br>
<form method="post" action="<?php
echo $_SERVER["PHP_SELF"]; ?> ">
<div class="form-group">
<div class="row">
<!--<div class="col-md-1"><h4></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">product id</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtpid" ></div></div>-->
<div class="row">
<div class="col-md-1"><h4></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">product name</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtpname" ></div></div>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-3"><h4><span class="lable-lable-info">colour</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtcolor"></div></div>
<div class="row">
<div class="col-md-1"></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">price</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtprice"></div></div>
<div class="row">
<div class="col-md-1"><h4></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">manufecture</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtpmenuf"></div></div>
<div class="row">
<div class="col-md-1"><h4></span></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">warranty</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtwarr"></div></div>
<div class="row">
<div class="col-md-1"><h4></span></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">stock on hand</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtsoh"></div></div>
<div class="row">
<div class="col-md-1"></span></h4></div>
<div class="col-md-3"><h4><span class="lable-lable-info">product img</span></h4></div>
<div class="col-md-5"><input type="text"  class="form-control" name="txtpimg"></div></div>
<div class="row">
<div class="col-md-1"></span></div>
<div class="col-md-3"><h4><span class="lable-lable-info">categary</span></h4></div>
<div class="col-md-5"><select name="fk_catid">
<?php
require 'connectcode.php';
      $obj=new bag;
       $result=$obj-> getcategory();
//$result=$conn->query("select * from cat_tbl");//name of table
if($result->num_rows > 0)
{
    while($rows=$result -> fetch_assoc())
    {   
        echo '<option value='. $rows["cat_id"] .'>'. $rows["cat_name"] .'</option>';
    }
}
?>
</select></div></div>
<div class="row">
<br><br><br>
<div class="col-md-12"><center><input type="submit" name="btnin" value="Insert" class="btn btn-primary"></center></div></div>
</div>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $_pid="";
 //$_pid=$_POST["txtpid"];
 $_name=$_POST["txtpname"];
$_color=$_POST["txtcolor"];
 $_price=$_POST["txtprice"];
 $_menuf=$_POST["txtpmenuf"];
 $_warr=$_POST["txtwarr"];
 $_soh=$_POST["txtsoh"];
 $_pimg=$_POST["txtpimg"];
 $_catid=$_POST["fk_catid"];
if(isset($_POST["btnin"]))
    {
$result=$obj->InsertProduct($_name,$_color,$_price,$_menuf,$_warr,$_soh,$_pimg,$_catid);


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

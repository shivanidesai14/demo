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
require 'productdb.php';
$obj=new database;
$result=$obj->getproduct();

?>
<?php

include 'navbar.php';
?>
<form method="post" action="product.php">
<div class="jumbotron text-center"style="background-color:salmon;color:black;" class="btn btn-primary">
  <h1>Product Table</h1>
</div>
<div class="container">
<table class="table">
<thead>
<th>Product Id</th>
<th>Product Name</th>
<th>Product Color</th>
<th>Prize</th>
<th>Manufacture</th>
<th>Waranty</th>
<th>Stock On Hand</th>
<th>Image</th>
<th>Action</th>
</thead>
<?php
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
            echo '<h2>';
            echo '<tr>';
            echo '<td>'. $row["pid"] .'</td>';
            echo '<td>'. $row["pname"].'</td>';
            echo '<td>'. $row["pcolor"].'</td>';
            echo '<td>'.$row["prize"].'</td>';
            echo '<td>'.$row["manu"].'</td>';
            echo '<td>'.$row["warr"].'</td>';
            echo '<td>'.$row["soh"].'</td></h2>';
            echo '<td><img src="'. $row["image"] .'" style="height:300px;width:300px;" class="img-thumbnail img-responsive"></td>';
            echo '<td><a href="prodelete.php?id='. $row["pid"].'"><span  class="glyphicon glyphicon-trash btn btn-danger">  <a href="pupdate.php?id='. $row["pid"].'"><span  class="glyphicon glyphicon-edit btn btn-success"></span></td>';
            echo '</tr>';
           
             
    }
}
?>
</table>
</div>
</form>
</body>
</html>
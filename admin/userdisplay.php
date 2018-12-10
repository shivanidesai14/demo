<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="js/bootstrap.min.js"></script>
<body>
<?php
include 'navbar.php';
?>
<?php
require 'userdb.php';
$obj=new database();
$result=$obj->usergetdata();
?>
<form method="post" action="product.php">
<div class="jumbotron text-center" style="background-color:salmon;color:black;" class="btn btn-primary">
  <h1>User Table</h1>
</div>
<div class="container">
<table class="table">
<thead>
<th>Email</th>
<th>Name</th>
<th>Password</th>
<th>Mobile</th>
<th>Address</th>
<th>Image</th>
<th>Gender</th>
</thead>
<?php
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
            echo '<tr>';
            echo '<td>'. $row["email"]  .'</td>';
            echo '<td>'. $row["name"] .'</td>';
            echo '<td>'. $row["password"] .'</td>';
            echo '<td>'. $row["mobile"] .'</td>';
            echo '<td>'. $row["address"] .'</td>';
            echo '<td><img src="'. $row["image"] .'" style="height:200px;width:250px;" class="img-responsive"></td>';
            echo '<td>'. $row["gender"].'</td>';
            echo '</tr>';
    }

}

?>
</body>
</html>
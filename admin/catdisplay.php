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
require 'catdb.php';
$obj=new database();
$result=$obj->catgetdata();
?>
<form method="post" action="product.php">
<div class="jumbotron text-center" style="background-color:salmon;color:black;" class="btn btn-primary">
  <h1>Cat Table</h1>
</div>
<div class="container">
<table class="table table-bordered">
<thead>
<th>Id</th>
<th>Name</th>
<th>Action</th>
</thead>
<?php
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
            echo '<tr>';
            echo '<td>'. $row["cat_id"]  .'</td>';
            echo '<td>'. $row["cat_name"] .'</td>';
             echo '<td><a href="catdelete.php?id='.$row["cat_id"].'"><span  class="glyphicon glyphicon-trash">
        </span></a>|<a href="catupdate.php?id='.$row["cat_id"].'"><span  class="glyphicon glyphicon-edit"></span></a></td>';
            echo '</tr>';
    }

}

?>
</body>
</html>
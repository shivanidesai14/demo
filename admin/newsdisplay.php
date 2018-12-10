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
require 'newsdb.php';
$obj=new database();
$result=$obj->newsgetdata();
?>
<form method="post" action="product.php">
<div class="jumbotron text-center" style="background-color:salmon;color:black;" class="btn btn-primary">
  <h1>News Table</h1>
</div>
<div class="container">
<table class="table table-bordered">
<thead>
<th>News Id</th>
<th>News Title</th>
<th>News Desc</th>
<th>News Date</th>
<th>News Image</th>
<th>User Id</th>
<th>Action</th>
</thead>
<?php
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
            echo '<tr>';
            echo '<td>'. $row["news_id"]  .'</td>';
            echo '<td>'. $row["news_title"] .'</td>';
             echo '<td>'. $row["news_desc"] .'</td>';
              echo '<td>'. $row["news_date"] .'</td>';
               echo '<td>'. $row["news_img"] .'</td>';
                echo '<td>'. $row["user_id"] .'</td>';
                 echo '<td><a href="newsdelete.php?id='.$row["news_id"].'"><span class="glyphicon glyphicon-trash">
        </span></a>|<a href="newsupdate.php?id='.$row["news_id"].'"><span class="glyphicon glyphicon-edit"></span></a></td>';
            echo '</tr>';
    }

}

?>
</body>
</html>
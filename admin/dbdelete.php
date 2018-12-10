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

$cnn=new mysqli("localhost","root","","demo");
$sql="select * from news_tbl";
$result=$cnn->query($sql)
?>
<form method="post" action="dbdelete.php">
<table class="table">
<?php
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        echo '<tr>';
        echo '<td>'.$row["news_id"].'</td>';
        echo '<td>'.$row["news_title"].'</td>';
        echo '<td>'.$row["news_desc"].'</td>';
        echo '<td><a href="delete1.php?id='.$row["news_id"].'">Delete</a></td>';
    }
}
?>
</table>
</form>

</body>
</html>

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
<?php include 'adminmenu.php' ?>
<h1><center>Category view</h1></center>
<body class="container">
<?php
require 'connectcode.php';
      $obj=new bag;
       $result=$obj->getcategory();
?>
<table class="table">
<thead>
<th>cat_id</th>
<th>name</th>
<th>delete/update</th>
</thead>
<?php
if($result->num_rows > 0)
{
    while($rows=$result -> fetch_assoc())
    {
        echo "<tr>";
        echo "<td>".$rows["cat_id"]."</td>";
    echo "<td>".$rows["cat_name"]."</td>";
    echo '<td> <a href="catdelete.php?id='.$rows["cat_id"].'"><span class="glyphicon glyphicon-trash"></span></a>|';
    echo ' <a href="catupdate.php?id='.$rows["cat_id"].'"><span class="glyphicon glyphicon-pencil"></span></a></td>';
       echo "</tr>";
    }

}
?>
</body>
</html>
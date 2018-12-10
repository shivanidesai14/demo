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
<body class="fluid">
<?php
include 'adminmenu.php';
?>
<h1><center>product table</h1></center>
<?php
 require 'connectcode.php';
      $obj=new bag;
       $result=$obj->viewProductAdmin();
//$result=$conn->query("select * from product_tbl");
?>
<table class="table-responsive" align="center">
<thead>
<th> id &nbsp;</th>
<th> name &nbsp;</th>
<th> colour &nbsp;</th>
<th> prize &nbsp;</th>
<th> manufecture &nbsp;</th>
<th> warranty &nbsp;</th>
<th> stockOnHand &nbsp;</th>
<th> category &nbsp;</th>
<th> image &nbsp;</th>
<th>delete/update</th>
</thead>
<?php
if($result->num_rows > 0)
{

    while($row=$result->fetch_assoc())
    {
       
        echo '<tr>';
        echo '<td>' .$row["pid"] .'</td>';
         echo '<td>' .$row["pname"] .'</td>';
         echo '<td>' .$row["colour"] .'</td>';
          echo '<td>' .$row["price"] .'</td>';
           echo '<td>' .$row["manufecture"] .'</td>';
           echo '<td>' .$row["warranty"] .'</td>';
            echo '<td align="center">' .$row["stock_on_hand"] .'</td>';
            echo '<td>'. $row["cat_name"] .'</td>';
            echo  '<td>'.$row["pimg"];?> <img src="<?php echo $row["pimg"];?>" height="100" width="100"><?php echo '</td>';
         
           echo '<td><a href="productdel.php?id='. $row["pid"] .'"><span class="glyphicon glyphicon-trash"></span></a>|</td>';
     echo '<td><a href="productupd1.php?id='. $row["pid"] .'"><span class="glyphicon glyphicon-pencil"></span></a></td>';
       
        echo '</tr>';
    }
}
?>
</table>
</body>
</html>
<?php
session_start();
?>
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

?>
<div class="jumbotron text-center" style="background-color:black;color:white;" class="btn btn-primary">
  <h1>Product Details</h1>
</div>
<?php
$_pid=$_GET["id"];
$cnn=new mysqli("localhost","root","","demo");
$sql="select * from product_tbl where pid=".$_pid;
$result=$cnn->query($sql);
if($result->num_rows>0)
{
   
    while($row=$result->fetch_assoc())
    {
        
   echo '<div class="row">';
 echo '<div class="col-xs-5">';
   echo ' <center><a href="#">';
     echo '<ceter><img src="' . $row["image"] . '" class="img-responsive img-circle"></center>';
      echo'  </a>';
   echo '</div>';
 echo '<div class="col-xs-7">';
echo '<ul class="list-group">';
echo '<h1>Name :- '.$row["pname"].'</h1><br>';
 echo ' <h1>Product color :- '. $row["pcolor"] .'</h1><br>';
  echo '<h1>Prize :- '. $row["prize"] .'</h1><br>';
 echo '<h1>Manufacture :- '. $row["manu"] .'</h1><br>';
 echo ' <h1>Warranty :- '. $row["warr"] .'</h1><br>';
 echo ' <h1>Stock On Hand :- '. $row["soh"] .'</h1><br>';
 echo ' <h1>Full Description :- '. $row["des"] .'</h1><br>';
echo '</ul>';
echo '</div>';  
      
    }  
}

?>
</body>
</html>
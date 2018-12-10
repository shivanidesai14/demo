
<?php
session_start();
?>
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
include 'navbar.php';

?>
<div class="jumbotron text-center" style="background-color:black;color:white;" class="btn btn-primary">
  <h1>View Profile</h1>
</div>
<?php

$_email= $_SESSION["uname"];
require 'database.php';
$obj=new database;
$result=$obj->profile($_email);
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
echo '<h1>Name :- '.$row["name"].'</h1><br>';
 echo ' <h1>Email :- '. $row["email"] .'</h1><br>';
  echo '<h1>Mobile :- '. $row["mobile"] .'</h1><br>';
 echo '<h1>Address :- '. $row["address"] .'</h1><br>';
 echo ' <h1>Gender :- '. $row["gender"] .'</h1><br>';
echo '</ul>';
echo '</div>';
}
?>

</body>
</html>
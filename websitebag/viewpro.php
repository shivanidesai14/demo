<?php
session_start(); ?>
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
<body class="container">
<?php
include 'menubar.php';
?>
<h1><center>view profile</h1></center>
<div class="col-md-3"></div>
<?php

if($_SESSION["email"]== "")
{
header('location:login.php');
}
require 'connectcode.php';
      $obj=new bag;
       $result=$obj->getuser($_SESSION["email"]);

echo '<center>';
    while($rows=$result -> fetch_assoc())
    {   
               echo ' <div class="row" class="container">';
    echo '<div class="col-md-6 ">';
    echo '<div class="thumbnail">';
     ?><img src="<?php echo $rows["image"];?>" height="300" width="300"><?php
           echo '<div class="caption">';
           echo '<h3>';
       echo ' name is:     '.$rows["name"] .'<br>';
        echo '<p> password is:    '. $rows["password"].'<br>';  
         echo ' mobile no is:    '. $rows["mobile_no"].'<br>';           
           echo ' address in:    '. $rows["address"].'<br>';
            echo ' gender is:    '. $rows["gender"].'<br>';
             echo ' img is:    '. $rows["image"].'<br>';
                    echo '</h3></p>';
     echo   ' </div> ';
       echo '  </div> ';
  echo '</div> ';
echo '</div> ';
        
       
}
echo '</center>';
?>

<div class="col-md-12 "><center><span class="btn btn-default"><a href="editpro.php">EDIT PROFILE</a></span></center>

</body>
</html>
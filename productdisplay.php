<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar 
    {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

  
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>
<body>
<?php
include 'navbar.php';

?>
<div class="jumbotron" style="background-color:black;">
  <div class="container text-center">
  

  <div class="container">
  <div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
      <ol class="carousel-indicators">
    
      <li class="item2 active"></li>
      <li class="item3"></li>
      <li class="item4"></li>
    </ol> 

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images/Untitled.png" class="img-responsive" alt="Chania" style="height:350px;width:900px;">
      </div>
    
      <div class="item">
        <img src="images/c.png" alt="Flower" class="img-responsive" style="height:350px;width:900px;">
      </div>

      <div class="item">
        <img src="images/Untitledb.png" alt="Flower" class="img-responsive" style="height:350px;width:900px;" >
      </div>
  
    </div>

    <!-- Left and right controls -->
    
  </div>
</div>

<script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel();
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
    
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});
</script>
    <u><h2 style="color:white;">The Beg Talk</h2>      </u>
    <p style="color:white;">Mission, Vission & Values</p></img>
  </div>
</div>





 <?php
require 'database.php';
$obj=new database;
$result=$obj->productdisplay();
if($result->num_rows>0)
{
   
    while($row=$result->fetch_assoc())
    {
      
    
 

 echo   '<div class="col-sm-6">';
  echo    '<div class="panel panel-primary">';
   echo     '<h1><div class="panel-heading">'. $row["pname"] .'</div></h1>';
    echo     '<div class="panel-body"><a href="imgdesc.php?id='. $row["pid"] . '"><img src="'. $row["image"] .'" class="img-responsive" style="width:100%" alt="Image"></a></div>';
    echo    '<div class="panel-footer">'. $row["des"] .'</div>';
    echo  '</div>';
    echo   '</div>';
    echo   '</div>';
    echo   '</div>';
    
   
    
    }
}
    

?>
</table>
</div>
</form>
</body>
</html>
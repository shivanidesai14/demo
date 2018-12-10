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
<div class="row">
<div class="col-md-3">
<ul class="list-group">
  <li class="list-group-item disabled">Item categories</li>
<?php
require 'connectcode.php';
      $obj=new bag;
       $result=$obj->getcategory();//function form connection code

    while($rows=$result -> fetch_assoc())
    { 
  echo '<li class="list-group-item">'.$rows["cat_name"].'</li>';
    }
  ?>
</ul>
  </div>
  <div class="col-md-9">
  <?php
     $result=$obj->getproduct();//function form connection code

    while($rows=$result -> fetch_assoc())
    {   
   
   echo '<div class="col-sm-6 col-md-3">';
    echo '<div class="thumbnail">';
      ?><img src="<?php echo $rows["pimg"];?>" height="100" width="100"><?php
      echo '<div class="caption">';
      echo '<h3><b>'.$rows["pname"] .'</h3></b><br>';
       echo '<p>colour is:    '. $rows["colour"].'<br>';
       echo ' price is:    '. $rows["price"].'<br>';
        echo ' manufecture in:    '. $rows["manufecture"].'<br>';
        echo ' warranty is:    '. $rows["warranty"].'<br>';
         echo '</p>';        
echo '</div>';
echo '</div>';
echo '</div>';
}
    ?>
     </div>
   </div>
  </body>
</html>
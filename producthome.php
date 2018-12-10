<?php
    session_start();
    /*if(!isset($_SESSION['admin_id']) && $_SESSION['admin_id']!=''){
        header('location:adminlogin.php');
        exit;
    }*/
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php include 'adminheader.php'; ?>
</head>
<body class="">

   <?php
        $conn=new mysqli('localhost','root','','product_db');
        $sql="select p.*,c.* from product_tbl p,cat_tbl c where p.fk_cat_id=c.cat_id";
        $result=$conn->query($sql);
        if($conn->connect_error){
        echo "connection error";
    }
   ?> 
   <div class="table-responsive container">
   <table class="table">
       <thead>
       <th>Product ID</th>
       <th>Product Name</th>
       <th>Product Color</th>
       <th>Product Price</th>
       <th>Product Manufacturer</th>
       <th>Product Warranty</th>
       <th>Product Stock On Hand</th>
       <th>Product Image</th>
       <th>Product Category</th>
       <th>Action</th>
       </thead>
       <?php
       while($row=$result->fetch_assoc()){
        echo '<tr>';
        echo '<td>'.$row["prod_id"] .'</td>';
        echo '<td>'.$row["prod_name"] .'</td>';
        echo '<td>'.$row["prod_color"] .'</td>';
        echo '<td>'.$row["prod_price"] .'</td>';
        echo '<td>'.$row["prod_manufacture"] .'</td>';
        echo '<td>'.$row["prod_warranty"] .'</td>';
        echo '<td>'.$row["prod_soh"] .'</td>';
        echo '<td><img class="img-responsive img-thumbnail" src="'.$row["prod_img"].'"></td>';
        echo '<td>'.$row["cat_name"] .'</td>';
        echo '<td> <a href="productupdate.php?id='.$row["prod_id"].'"><span class="glyphicon glyphicon-pencil"></span></a> | 
             <a href="productdelete.php?id='.$row["prod_id"].'"><span class="glyphicon glyphicon-trash"></span></a> </td>';
        echo '</tr>';

        }
       ?>
   </table>
   </div>  
   <form>
<div class="row">
  <div class="form-group input-group-lg container" align="center">
      <button type="submit" name="btnIns" class="btn btn-success">Insert A Record</button>
  </div>
  <a href="productinsert.php">Insert A Record</a>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        header('location:productinsert.php');
    }
?>
<script>
  $('#myButton').on('click', function () {
    var $btn = $(this).button('loading')
    // business logic...
    $btn.button('reset')
  })
</script>
  </div>
   </form>
</body>
</html>
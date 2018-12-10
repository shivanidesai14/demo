<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<!-- jQuery library -->
<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'adminheader.php'; ?>
<div class="jumbotron">
  <div class="container">
    <h1>Product Update</h1>
  </div>
</div>
<?php

$conn=new mysqli('localhost','root','','product_db');
$_pid=$_GET["id"];
$sql="select * from product_tbl where prod_id=".$_pid;
$result=$conn->query($sql);
$row=$result->fetch_assoc();

$_pname=$row["prod_name"];
$_pcolor=$row["prod_color"];
$_pprice=$row["prod_price"];
$_pmanu=$row["prod_manufacture"];
$_pwarra=$row["prod_warranty"];
$_psoh=$row["prod_soh"];
$_pimg=$row["prod_img"];
$_fk_cat_id=$row["fk_cat_id"];
?>
    <form enctype="multipart/form-Data" action="productupdate1.php?img=<?php echo $_pimg; ?> " method="post" class="container">
        <div class="row">
            <div class="form-group col-ld-10">
                <input type="text" value="<?php echo $_pid; ?>" class="form-control" id="text" placeholder="Enter Product ID" name="txtpis" readonly>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-ld-10">
                <input type="text" value="<?php echo $_pname; ?>" class="form-control" id="text" placeholder="Enter Product Name" name="txtpname" >
            </div>
        </div>
        <div class="row">
            <div class="form-group col-ld-10">
                <input type="text" value="<?php echo $_pcolor; ?>" class="form-control" id="text" placeholder="Enter Product Color" name="txtpcolor" >
            </div>
        </div>
         <div class="row">
            <div class="form-group col-ld-10">
                <input type="text" value="<?php echo $_pprice; ?>" class="form-control" id="text" placeholder="Enter Product Price" name="txtpprice" >
            </div>
        </div>
         <div class="row">
            <div class="form-group col-ld-10">
                <input type="text" value="<?php echo $_pmanu; ?>" class="form-control" id="text" placeholder="Enter Product Manufacturer" name="txtpmanu" >
            </div>
        </div>
         <div class="row">
            <div class="form-group col-ld-10">
                <input type="number" value="<?php echo $_pwarra; ?>" class="form-control" id="text" placeholder="Enter Product Warranty(Years)" name="txtpwarranty" >
            </div>
        </div>
         <div class="row">
            <div class="form-group col-ld-10">
                <input type="text" value="<?php echo $_psoh; ?>" class="form-control" id="text" placeholder="Enter Stock On Hand" name="txtpsoh" >
            </div>
        </div>
         <div class="row">
            <div class="form-group col-ld-10">
            <img src="<?php echo $_pimg; ?>" height="150px" width="150px"/>
            <input type="file"  class="form-control"  name="txtpimg" >
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <select name="fk_cat_id" class="form-control">
                <?php
                    $conn=new mysqli('localhost','root','','product_db');
                    $sql="select * from cat_tbl";
                    $result=$conn->query($sql);
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            echo '<option value="'.$row["cat_id"].'">'.$row["cat_name"].'</option>';
                        }
                    }
                ?>
                </select>
            </div>
        </div>
        <div class="row">
            <button type="submit" class="form-control btn btn-success" aria-label="Left Align"> Update 
            <span class="glyphicon glyphicon-check" ></span>
            </button>
        </div>
    </form>
</body>
</html>
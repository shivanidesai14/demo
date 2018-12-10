<?php
session_start();
$oldimg=$_GET["img"];
$_pid=$_POST["txtpis"];
$_pname=$_POST["txtpname"];
$_pcolor=$_POST["txtpcolor"];
$_pprice=$_POST["txtpprice"];
$_pmanu=$_POST["txtpmanu"];
$_pwarra=$_POST["txtpwarranty"];
$_psoh=$_POST["txtpsoh"];
$_pimg=basename($_FILES["txtpimg"]["name"]);
if($_pimg==""){
$_pimg=$oldimg;
}
else{
    
    unlink($oldimg);
    move_uploaded_file($_FILES["txtpimg"]["tmp_name"],"images/".$_pimg);
    $_pimg="images/".$_pimg;
}

$_fk_cat_id=$_POST["fk_cat_id"];
require 'databaseproduct.php';
$obj=new productdb;
$res=$obj->productUpdate($_pid,$_pname,$_pcolor,$_pprice,$_pmanu,$_pwarra,$_psoh,$_pimg,$_fk_cat_id);

if($res===true){
    header('location:producthome.php');

}
else{
    echo "Not inserted";
    echo "update product_tbl set prod_name='".$_pname ."',prod_color='".$_pcolor ."',prod_price='".$_pprice ."',prod_manufacture='".$_pmanu ."',prod_warranty='".$_pwarra ."',prod_soh='".$_psoh ."',prod_img='".$_pimg ."' where prod_id='".$_pid ."' ";
    echo $_SESSION['prod_id'];
}

?>
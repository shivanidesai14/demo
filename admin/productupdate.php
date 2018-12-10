<?php
$_image=$_GET["img"];
$_pid=$_POST["txtpid"];
$_pname=$_POST["txtpname"];
$_pcolor=$_POST["txtpcolor"];
$_pprice=$_POST["txtpprice"];
$_pmanu=$_POST["txtpmanu"];
$_pwarra=$_POST["txtpwarranty"];
$_psoh=$_POST["txtpsoh"];
$_pimg=basename($_FILES["txtpimg"]["name"]);
$_des=$_POST["txtdesc"];
$_fk_cat_id=$_POST["fk_cat_id"];
if($_pimg=="")
{
    $_pimg=$_image;
}
else
{
    unlink($_image);
    move_uploaded_file($_FILES["txtpimg"]["tmp_name"],"images/".$_pimg);
    $_pimg="images/".$_pimg;
}
require 'productdb.php';
$obj=new database;
$res=$obj->proupdate($_pname,$_pcolor,$_pprice,$_pmanu,$_pwarra,$_psoh,$_pimg,$_des,$_fk_cat_id,$_pid);
if($res===TRUE)
{
    header('location:product.php');
}
else
{
    echo "unsuccesful";
}
?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_pid=$_POST["txtpid"];
$_pname=$_POST["txtpname"];
$_pcolor=$_POST["txtpcolor"];
$_pprice=$_POST["txtpprice"];
$_pmanu=$_POST["txtpmanu"];
$_pwarra=$_POST["txtpwarranty"];
$_psoh=$_POST["txtpsoh"];
$_des=$_POST["txtdesc"];
$_fk_cat_id=$_POST["fk_cat_id"];
$target_dir="images/";
$target_file=$target_dir.basename($_FILES["pimg"]["name"]);
if(move_uploaded_file($_FILES["pimg"]["tmp_name"],$target_file))
{
require 'productdb.php';
$obj=new database;
$res=$obj->proinsert($_pid,$_pname,$_pcolor,$_pprice,$_pmanu,$_pwarra,$_psoh,$target_file,$_des,$_fk_cat_id);
if($res===true)
{
    header('location:product.php');
}
else
{
    echo "Not inserted";
}
}
else
{
    echo "not";
}
}
?>
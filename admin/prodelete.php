<?php
$_id=$_GET["id"];
require 'productdb.php';
$obj=new database();
$result=$obj->productdelete($_id);
if($result===TRUE)
{
    header('location:product.php');
}
else
{
    echo "not succesfully";
}

?>
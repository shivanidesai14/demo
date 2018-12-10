<?php
$_id=$_GET["id"];
require 'connectcode.php';
      $obj=new bag;
       $result=$obj->DeleteProduct($_id);
if($result==true)
{
    header('location:productdb.php');
}

?>
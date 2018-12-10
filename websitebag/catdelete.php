<?php
$_id=$_GET["id"];
require 'connectcode.php';
      $obj=new bag;
       $result=$obj->categorydelete($_id);
if($result==true)
{
    header('location:catview.php');
}

?>
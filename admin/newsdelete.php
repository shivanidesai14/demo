<?php
$_id=$_GET["id"];
require 'newsdb.php';
$obj=new database;
$result=$obj->newsdelete($_id);
if($result===TRUE)
{
    header('location:newsdisplay.php');
}
else
{
    echo "not deleted";
}

?>
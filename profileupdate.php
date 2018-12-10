<?php
$_email=$_POST["txtemail"];
$_name=$_POST["txtname"];
$_pass=$_POST["txtpass"];
$_mob=$_POST["txtmob"];
$_add=$_POST["txtadd"];
$_img=$_POST["txtimg"];
$_gender=$_POST["rbt1"];
require 'database.php';
$obj=new database;
$result=$obj->pupdate($_name,$_pass,$_mob,$_add,$_img,$_gender,$_email);
if($result===TRUE)
{
    header('location:profile.php');
}
else
{
    echo "unsuccesful";
}
?>

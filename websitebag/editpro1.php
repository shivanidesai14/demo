<?php 
session_start();
$_email=$_SESSION["email"];
 $_name=$_POST["txtname"];
$_pass=$_POST["txtpass"];
 $_mobile=$_POST["txtmobile"];
 $_add=$_POST["txtadd"];
  $_gen=$_POST["gender"];
 $_img=$_POST["txtimg"];

  require 'connectcode.php';
      $obj=new bag;
       $result=$obj->updateuser($_email,$_name,$_pass,$_mobile,$_add,$_img,$_gen);

if($result===true)
{
       header('location:viewpro.php');
}
else
{
    echo "error";
    echo $result;
}
    ?>
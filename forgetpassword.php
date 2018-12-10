<?php
$_email=$_POST["txtemail"];
require 'database.php';
$obj=new database;
$result=$obj->forgetpassword($_email);
$row=$result->fetch_assoc();
$_pass=$row["password"];
echo $_pass;

?>
<?php
$_pid=$_POST["txtpid"];
$_name=$_POST["txtpname"];
$_color=$_POST["txtcolor"];
$_price=$_POST["txtprice"];
$_manuf=$_POST["txtpmenuf"];
$_war=$_POST["txtwarr"];
$_soh=$_POST["txtsoh"];
$_pimg=$_POST["txtpimg"];
require 'connectcode.php';
      $obj=new bag;
       $result=$obj->UpdateProduct($_pid,$_name,$_color,$_price,$_manuf,$_war,$_soh,$_pimg);

if($result===true)

{
header('location:productdb.php');
}
else
{
   echo $result;
echo "record inserted not suseesfully";

}

?>
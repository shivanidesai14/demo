<?php
$_cid=$_POST["txtcid"];
$_name=$_POST["txtname"];
require 'connectcode.php';
      $obj=new bag;
       $result=$obj->catupdate1($_cid,$_name);

if($result===true)

{
header('location:catview.php');
}
else
{
   echo $result;
echo "record inserted not suseesfully";

}

?>
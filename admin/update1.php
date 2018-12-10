<?php

 if($_SERVER["REQUEST_METHOD"]=="POST")
 {

     $_newsid=$_POST["newsid"];
$_newstitle=$_POST["newstitle"];
$_newsdesc=$_POST["newsdesc"];
$_newsdate=$_POST["newsdate"];
$_newsimg=$_POST["newsimg"];
$_newsuid=$_POST["newsuid"];


    $cnn=new mysqli("localhost","root","","demo");
    $sql="update news_tbl set news_title='".$_newstitle."',news_desc='".$_newsdesc."',news_date='".$_newsdate."' where news_id='".$_newsid."'";
    if($cnn->query($sql)===TRUE)
    {

        header('location:dbupdate.php');

    }
    else
    {
        echo "update news_tbl set news_title='".$_newstitle."',news_desc='".$_newsdesc."',news_date='".$_newsdate."',news_img='".$_newsimg."',news_uid='".$_newsuid ."'where news_id='".$_newsid."'";
         echo " not succesfully";


        }



 }

?>
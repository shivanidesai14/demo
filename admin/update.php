<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
$_newsid="";
$_newstitle="";
$_newsdesc="";
$_newsimg="";
$_newsdate="";
$_newsuid="";
$_newsid=$_GET["id"];
$cnn=new mysqli("localhost","root","","demo");
$sql="select * from news_tbl where news_id=".$_newsid;
$result=$cnn->query($sql);
$row=$result->fetch_assoc();
$_newstitle=$row["news_title"];
$_newsdesc=$row["news_desc"];
$_newsimg=$row["news_img"];
$_newsdate=$row["news_date"];
if($_SERVER["REQUEST_METHOD"]=="POST")
 {

 $_newsid=$_POST["newsid"];
$_newstitle=$_POST["newstitle"];
$_newsdesc=$_POST["newsdesc"];
$_newsdate=$_POST["newsdate"];
$_newsimg=$_POST["newsimg"];
$_newsuid=$_POST["newsuid"];


    $cnn=new mysqli("localhost","root","","demo");
    $sql="update news_tbl set news_title='".$_newstitle."',news_desc='".$_newsdesc."',news_date='".$_newsdate."',news_img='". $_newsimg ."',user_id='". $_newsuid ."' where news_id='".$_newsid."'";
    if($cnn->query($sql)===TRUE)
    {

        header('location:newsdisplay.php');

    }
    else
    {
        
         echo " not succesfully";


     }



 }


?>
<form method="post" action="">
<input type="text" name="newsid" value=<?php echo $_newsid; ?> ><br>
<input type="text" name="newstitle" value=<?php echo $_newstitle; ?> ><br>
<input type="text" name="newsdesc" value=<?php echo $_newsdesc; ?>><br>
<input type="text" name="newsdate" value=<?php echo $_newsdate; ?>><br>
<input type="text" name="newsimg" value=<?php echo $_newsimg; ?>><br>
<input type="text" name="newsuid" value=<?php echo $_newsuid; ?>><br>
<input type="submit" value="submit" name="btnsubmit">


</form>

</body>
</html>



<html>
<head>
<script src="js/jquery-3.2.1.min.js"></script>
<!-- latest complied and minified css-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!--optional theme-->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<!-- latest complied and minified javascript-->
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn=new mysqli("localhost","root","","testdb");
if($conn->connect_error)
{

    echo "connection error";
}
$result=$conn->query("select * from user_tbl");
?>
<table class="table">
<thead>
<th>email</th>
<th>name</th>
<th>password</th>
<th>mobile</th>
<th>address</th>
<th>gender</th>
<th>image</th>
</thead>
<?php
if($result->num_rows > 0)
{

    while($row=$result->fetch_assoc())
    {
      
        echo '<tr>';
        echo '<td>' .$row["email_id"] .'</td>';
         echo '<td>' .$row["name"] .'</td>';
         echo '<td>' .$row["password"] .'</td>';
          echo '<td>' .$row["mobile_no"] .'</td>';
           echo '<td>' .$row["address"] .'</td>';
           
             echo  '<td>'.$row["image"];?> <img src="<?php echo $row["image"];?>" height="100" width="100"><?php echo '</td>';
          echo '<td>' .$row["gender"] .'</td>';
          //     echo '<td><a href="productdel.php?id='. $row["pid"] .'"><span class="glyphicon glyphicon-trash"></span></a>|</td>';
     //echo '<td><a href="productupd1.php?id='. $row["pid"] .'"><span class="glyphicon glyphicon-pencil"></span></a></td>';
            echo '</tr>';
    }
}
?>
</table>

<center><a href="productin.php">INSERT YOUR RECORD</a></center>
</body>
</html>
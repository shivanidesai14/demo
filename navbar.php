
<html>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">The Beg Talk</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="productdisplay.php">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="profile.php">View Profile</a></li>
          <li><a href="pupdate.php">Edit Profile</a></li>
          <li><a href="changepass.php">Change Password</a></li>
        </ul>
         </ul>
      </li>
    </ul>
     <ul class="nav navbar-nav navbar-right">
      <li><?php 
      $_name= $_SESSION["uname"];
$cnn=new mysqli("localhost","root","","demo");
$sql="select * from user_tbl where 	email='". $_name ."'";
$result=$cnn->query($sql);
while($row=$result->fetch_assoc())
{
    echo '<h4 style="padding-top:5px;"><center>Welcome,'. $row["email"] .'</center></h4>';  
      
}  
        ?></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
  </div>
</nav>

</html>
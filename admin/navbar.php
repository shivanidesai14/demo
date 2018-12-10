<!DOCTYPE html>
<html>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Admin</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Product
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="product.php">Product Display</a></li>
          <li><a href="productinsert.php">Product Insert</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cat Table
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="catdisplay.php">Cat Display</a></li>
          <li><a href="catinsert.php">Cat Insert</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">News Table
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="newsdisplay.php">News Display</a></li>
          <li><a href="newsinsert.php">News Insert</a></li>
        </ul>
      </li>
      <li><a href="userdisplay.php">Users</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
  </div>
</nav>

</html>
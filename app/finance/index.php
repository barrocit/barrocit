<?php session_start(); ?>
<?php include "../../config/config.php"; ?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapStyle.css">
	<title>Barroc-IT ~ Finance</title>
</head>

<body>
	<header>
    
	</header>

<div class="container">

<img src="../images/menuBarrocit.png" width="1140" height= "400px;"/>

<div class="navbar navbar-default">
  <div class="navbar-header">
    <a class="navbar-brand">Finance</a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Index</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="http://localhost/GitHub/barrocit/app/development/logout.php">Log-out</a></li>
    </ul>
  </div>
</div>

    <?php  
    // succes of fail message
    if (isset($_GET['msg'])) {
    echo '<div class="alert alert-dismissable alert-success">' . htmlspecialchars($_GET['msg']) . '</div>' ;
    }
    ?>


<div class="page-header"><h2>Customers</h2></div>

<table class="table table-striped table-hover ">
    <thead>
      <tr>
        <th>Customer NR</th>
        <th>Company Name</th>
        <th>Contact Person</th>
        <th>Telephone Number</th>
        <th>E-mail</th>
        <th>See Projects</th>
      </tr>
    </thead>
    <tbody>
        <?php
          $sql = "SELECT * FROM customer";
          $query = mysqli_query($con, $sql);
          

          while ($row = mysqli_fetch_assoc($query)){
            echo '<tr><td>' . $row['customerNR'] . '</td>';
            echo '<td>' . $row['companyName'] . '</td>';
            echo '<td>' . $row['contactPerson'] . '</td>';
            echo '<td>' . $row['telephoneNumber'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td> <a href="projects.php?id=' . $row['customerNR'] . '"><img src="http://localhost/GitHub/barrocit/app/development/search.png"></a> </td></tr>';
          }
        ?>   
    </tbody>
  </table> 
</div>
<footer>
</footer>
</body>
</html>
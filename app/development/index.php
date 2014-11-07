<?php session_start(); ?>
<?php include "../../config/config.php"; ?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapStyle.css">
	<title>Barroc-IT ~ Development</title>
</head>

<body>
	<header>
    
	</header>

<div class="container">

<img src="../images/menuBarrocit.png" width="1140" height= "400px;"/>

<div class="navbar navbar-default">
  <div class="navbar-header">
    <a class="navbar-brand">Development</a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Index</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="http://localhost/GitHub/barrocit/app/development/logout.php">Log-out</a></li>
    </ul>
  </div>
</div>

<div class="page-header"><h2>Customers</h2></div>

<table class="table table-striped table-hover ">
    <thead>
      <tr>
        <th>Company Name</th>
        <th>Contact Person</th>
        <th>Address</th>
        <th>Zip code</th>
        <th>Residence</th>
        <th>Telephone number</th>
        <th>Fax number</th>
        <th>Email</th>
        <th>See projects</th>
      </tr>
    </thead>

    <tbody>
        <?php
          $sql = "SELECT * FROM customer";
          $query = mysqli_query($con, $sql);
          

          while ($row = mysqli_fetch_assoc($query)){
            echo '<tr><td>' . $row['companyName'] . '</a></td>';
            echo '<td>' . $row['contactPerson'] . '</a></td>';
            echo '<td>' . $row['address'] . '</a></td>';
            echo '<td>' . $row['zipCode'] . '</a></td>';
            echo '<td>' . $row['residence'] . '</a></td>';
            echo '<td>' . $row['telephoneNumber'] . '</a></td>';
            echo '<td>' . $row['faxNumber'] . '</a></td>';
            echo '<td><a href="mailto:">' . $row['email'] . '</a></td>';
            echo '<td><a href="projects.php?customerNR=' . $row['customerNR'] . '"><img src="img/search.png"> </a></td>';
          }
        ?>   
    </tbody>
  </table> 
</div>

<footer>

</footer>
</body>
</html>
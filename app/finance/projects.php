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
    <?php
    if( isset($_GET['id']) ) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM projects WHERE customerNR = $id";
    if (!$query = mysqli_query($con, $sql)) {
      echo 'Kan selectie niet uitvoeren.';
      die();
    }
    $row = mysqli_fetch_assoc($query);
    } 
  ?>
	<header>
    
	</header>

<div class="container">

<img src="../images/jumbotronfi.jpg" width="1140" height= "400px;"/>

<div class="page-header"><h2>Projects <a href="index.php" align="right" class="btn btn-danger">Go Back</a></h2></div>

<table class="table table-striped table-hover ">
    <thead>
      <tr>
        <th>Description</th>
        <th>Software</th>
        <th>Hardware</th>
        <th>See Invoices</th>
      </tr>
    </thead>
    <tbody>
        <?php
          $sql = "SELECT * FROM projects WHERE customerNR = $id";
          $query = mysqli_query($con, $sql);
          

          while ($row = mysqli_fetch_assoc($query)){
            echo '<tr><td>' . $row['description'] . '</td>';
            echo '<td>' . $row['software'] . '</td>';
            echo '<td>' . $row['hardware'] . '</td>';
            echo '<td> <a href="invoices.php?id=' . $row['projectsNR'] . '"><img src="http://localhost/GitHub/barrocit/app/development/search.png"></a> </td></tr>';
          }
        ?> 
    </tbody>
  </table> 
</div>
<footer>
</footer>
</body>
</html>
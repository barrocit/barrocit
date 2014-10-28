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
    $sql = "SELECT * FROM invoices WHERE invoicersNR = '$invoicersNR'";
    if (!$query = mysqli_query($con, $sql)) {
      echo 'Kan selectie niet uitvoeren.';
      die();
    }
    ?>

<div class="container">

<img src="../images/jumbotronfi.jpg" width="1140" height= "400px;"/>

<div class="navbar navbar-default">
  <div class="navbar-header">
    <a class="navbar-brand" href="index.php">Home</a>
    <a class="navbar-brand" href="addProject.php">Add Invoice</a>
  </div>
</div>

<table class="table table-striped table-hover ">
    <thead>
      <tr>
        <th>See Invoice</th>
        <th>Company Name</th>
        <th>Invoicenumber</th>
        <th>Projectnumber</th>
        <th>Date Invoice</th>
        <th>Amount</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>

    <tbody>
        <?php
          $sql = "SELECT * FROM invoices";
          $query = mysqli_query($con, $sql);
          

          while ($row = mysqli_fetch_assoc($query)){
            echo '<tr><td><a href="seeInvoice.php?id=' . $row['invoicersNR'] .'">X</a></td>';
            echo '<td>' . $row['company'] . '</td>';
            echo '<td>' . $row['invoicersNR'] . '</td>';
            echo '<td>' . $row['projectsNR'] . '</td>';
            echo '<td>' . $row['datum'] . '</td>';
            echo '<td>' . $row['bedrag'] . '</td>';
            echo '<td> <a href="deactivateProject.php?id="><img src="http://localhost/GitHub/barrocit/app/development/bewerken.png"></a> </td>';
            echo '<td> <a href="deactivateProject.php?id="><img src="http://localhost/GitHub/barrocit/app/development/verwijderen.png"></a> </td></tr>';
          }
        ?>   
    </tbody>
  </table> 
</div>

<footer>

</footer>
</body>
</html>
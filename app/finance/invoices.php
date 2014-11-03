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
    $sql = "SELECT * FROM invoices WHERE projectsNR = $id";
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

<div class="page-header"><h2>Invoices</h2></div>

<table class="table table-striped table-hover ">
    <thead>
      <tr>
        <th>Description</th>
        <th>Date Invoice</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>BTW</th>
        <th>Amount</th>
        <th>Edit Invoice</th>
        <th>Deactivate</th>
      </tr>
    </thead>
    <tbody>
        <?php
          $sql = "SELECT * FROM invoices WHERE projectsNR = $id";
          $query = mysqli_query($con, $sql);
          

          while ($row = mysqli_fetch_assoc($query)){
            echo '<tr><td>' . $row['description'] . '</td>';
            echo '<td>' . $row['datum'] . '</td>';
            echo '<td>' . $row['price'] . '</td>';
            echo '<td>' . $row['quantity'] . '</td>';
            echo '<td>' . $row['btw'] . '%</td>';
            echo '<td>' . $row['amount'] . '</td>';
            echo '<td> <a href="invoices-edit.php?id=' . $row['invoicesNR'] . '"><img src="http://localhost/GitHub/barrocit/app/development/bewerken.png"></a> </td>';
            echo '<td> <a href="invoices-edit.php?id=' . $row['invoicesNR'] . '"><img src="http://localhost/GitHub/barrocit/app/development/verwijderen.png"></a> </td></tr>';
          }
        ?> 
    </tbody>
  </table> 
</div>
<footer>
</footer>
</body>
</html>
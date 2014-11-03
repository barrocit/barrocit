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

<img src="../images/jumbotronfi.jpg" width="1140" height= "400px;"/>

<div class="navbar navbar-default">
  <div class="navbar-header">
    <a class="navbar-brand" href="index.php">Home</a>
    <a class="navbar-brand" href="addInvoice.php">Add Invoice</a>
  </div>
</div>

<table class="table table-striped table-hover ">
    <thead>
      <tr>
        <th>Invoicenumber</th>
        <th>Projectnumber</th>
        <th>Company Name</th>
        <th>Amount</th>
        <th>BTW</th>
        <th>Date Invoice</th>
        <th>Edit</th>
        <th>Deactivate</th>
      </tr>
    </thead>

    <tbody>
        <?php
          $sql = "SELECT * FROM invoices";
          $query = mysqli_query($con, $sql);
          

          while ($row = mysqli_fetch_assoc($query)){
            echo '<td>' . $row['invoicesNR'] . '</td>';
            echo '<td>' . $row['projectsNR'] . '</td>';
            echo '<td>' . $row['companyName'] . '</td>';
            echo '<td>€ ' . $row['amount'] . '</td>';
            echo '<td>' . $row['btw'] . '%</td>';
            echo '<td>' . $row['datum'] . '</td>';
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
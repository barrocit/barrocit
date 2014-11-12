<?php session_start(); 

if (! isset($_SESSION['name']) ) 
{
    header('location: ../error1.php');
}

if ($_SESSION ['gebruikersrol'] !='4' AND '1')
{
    header('location: ../error2.php');
}
?>
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

<img src="../images/menuBarrocit.png" width="1140" height= "400px;"/>

<div class="navbar navbar-default">
  <div class="navbar-header">
    <a class="navbar-brand">Finance</a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li><a href="index.php">Index</a></li>
      <li><a href="javascript:javascript:history.go(-1)">Projects</a></li>
      <li class="active"><a href="#">Invoices</a></li>
      <li><a href="invoices-add.php?id=<?php echo $row['projectsNR']; ?>">Add Invoice</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="http://localhost/GitHub/barrocit/app/development/logout.php">Log-out</a></li>
    </ul>
  </div>
</div>

<div class="page-header"><h2>Invoices</h2></div>

<table class="table table-striped table-hover ">
    <thead>
      <tr>
        <th>Invoice NR</th>
        <th>Description</th>
        <th>Date Invoice</th>
        <th>Price</th>
        <th>BTW</th>
        <th>Quantity</th>
        <th>Amount</th>
        <th>Edit Invoice</th>
        <th>Deactivate</th>
      </tr>
    </thead>
    <tbody>
        <?php
          $sql = "SELECT * FROM invoices WHERE projectsNR = $id AND active = '0'";
          $query = mysqli_query($con, $sql);

          while ($row = mysqli_fetch_assoc($query)){
          $price1 = $row['price'];
          $price2 = $row['quantity'];
          $price3 = $row['btw'];
          $som1 = $price1*$price2; 
          $som2 = $som1*$price3;
          $som2 = round($som2, 2);
            echo '<tr><td>' . $row['invoicesNR'] . '</td>';
            echo '<td>' . $row['description'] . '</td>';
            echo '<td>' . $row['datum'] . '</td>';
            echo '<td>€ ' . $row['price'] . '</td>';
            echo '<td>' . $row['btw'] . '%</td>';
            echo '<td>' . $row['quantity'] . '</td>';
            echo '<td>€<strong> ' . $som2 . '</strong></td>';
            echo '<td> <a href="invoices-edit.php?id=' . $row['invoicesNR'] . '"><img src="http://localhost/GitHub/barrocit/app/development/bewerken.png"></a> </td>';
            echo '<td> <a href="invoices-delete.php?id=' . $row['invoicesNR'] . '"><img src="http://localhost/GitHub/barrocit/app/development/verwijderen.png"></a> </td></tr>';
          }
        ?> 
    </tbody>
  </table> 
</div>
<footer>
</footer>
</body>
</html>
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
    $sql = "SELECT * FROM invoices WHERE invoicesNR = '$id'";
    if (!$query = mysqli_query($con, $sql)) {
      echo 'Kan selectie niet uitvoeren.';
      die();
    }
    $row = mysqli_fetch_assoc($query);
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
      <tr>
        <th width="300px">Company Name</th>
        <td><?php echo $row['company']; ?> </td>
      </tr>
      <tr>
        <th>Invoicenumber</th>
        <td><?php echo $row['invoiceNR']; ?> </td>
      </tr>
      <tr>
        <th>Projectnumber</th>
        <td><?php echo $row['projectNR']; ?> </td>
      </tr>
      <tr>
        <th>Date Invoice</th>
        <td><?php echo $row['date']; ?> </td>
      </tr>
      <tr>
        <th>Address</th>
        <td><?php echo $row['address']; ?> </td>
      </tr>
      <tr>
        <th>Zip Code</th>
        <td><?php echo $row['zipcode']; ?> </td>
      </tr>
      <tr>
        <th>Place</th>
        <td><?php echo $row['place']; ?> </td>
      </tr>
      <tr>
        <th>Contactpersoon</th>
        <td><?php echo $row['id']; ?> </td>
      </tr>
      <tr>
        <th>Telefoonnummer</th>
        <td><?php echo $row['id']; ?> </td>
      </tr>
      <tr>
        <th>Faxnummer</th>
        <td><?php echo $row['id']; ?> </td>
      </tr>
      <tr>
        <th>E-mail</th>
        <td><?php echo $row['id']; ?> </td>
      </tr>
      <tr>
        <th>Bankrekeningnummer</th>
        <td><?php echo $row['id']; ?> </td>
      </tr>
      <tr>
        <th>Saldo</th>
        <td><?php echo $row['id']; ?> </td>
      </tr>
      <tr>
        <th>Aantal Facturen</th>
        <td><?php echo $row['id']; ?> </td>
      </tr>
      <tr>
        <th>Omzetbedrag</th>
        <td><?php echo $row['id']; ?> </td>
      </tr>
      <tr>
        <th>Limiet</th>
        <td><?php echo $row['id']; ?> </td>
      </tr>
      <tr>
        <th>Grootboekrekeningnummer</th>
        <td><?php echo $row['id']; ?> </td>
      </tr>
      <tr>
        <th>BTW-code</th>
        <td><?php echo $row['id']; ?> </td>
      </tr>
  </table> 
</div>

<footer>

</footer>
</body>
</html>
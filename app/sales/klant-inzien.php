<?php session_start(); 

if (! isset($_SESSION['name']) ) 
{
    header('location: ../error1.php');
}

if ($_SESSION ['gebruikersrol'] !='3' && $_SESSION ['gebruikersrol'] != '4')
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
    $sql = "SELECT * FROM customer WHERE customerNR = $id";
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
    <a class="navbar-brand">Sales</a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li><a href="index.php">Index</a></li>
      <li><a href="dacustomers.php">Deactivated Customers</a></li>
      <li class="active"><a href="klant-inzien.php?id=<?php echo $row['customerNR']; ?>">Customerdata</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php
      if ($_SESSION ['gebruikersrol'] !='4')
      {}else {
      echo'<li><a href="../admin.php">Admin</a></li>';
      }?>
      <li><a href="http://localhost/GitHub/barrocit/app/development/logout.php">Log-out</a></li>
    </ul>
  </div>
</div>

    <div class="page-header"><h2>Customer</h2></div>

<div class="panel panel-warning">
  <div class="panel-heading">
    <h3 class="panel-title">Customerdata <?php echo $row['customerNR']; ?> <?php if( $row['active'] == 1)
                    {
                        echo "<strong>(NOT ACTIVATED)</strong>";
                    }?></h3>
  </div>
  <div class="panel-body">
<table>
    <tr>
      <th width="200">Company Name</th>
      <td><?php echo $row['companyName']; ?></td>
    </tr>
    <tr>
      <th>Adress</th>
      <td><?php echo $row['address']; ?></td>
    </tr>
    <tr>
      <th>Zipcode</th>
      <td><?php echo $row['zipCode']; ?></td>
    </tr>
    <tr>
      <th>Residence</th>
      <td><?php echo $row['residence']; ?></td>
    </tr>
    <tr>
      <th>Telephone Number</th>
      <td><?php echo $row['telephoneNumber']; ?></td>
    </tr>
    <tr>
      <th>Fax Number</th>
      <td><?php echo $row['faxNumber']; ?></td>
    </tr>
    <tr>
      <th>E-mail</th>
      <td><?php echo $row['email']; ?></td>
    </tr>
    <tr>
      <th>Appointments</th>
      <td><?php echo $row['appointments']; ?></td>
    </tr>
    <tr>
      <th>Last Contact Date</th>
      <td><?php echo $row['lastcontactDate']; ?></td>
    </tr>
    <tr>
      <th>Contact Person</th>
      <td><?php echo $row['contactPerson']; ?></td>
    </tr>
    <tr>
      <th>Prospect</th>
      <td><?php if( $row['prospect'] == 0)
                    {
                        echo "Yes";
                    }
                    if( $row['prospect'] == 1)
                    {
                        echo "No";
                    } ?></td>
    </tr>
</table> 
  </div>
</div>

<footer>

</footer>
</body>
</html>


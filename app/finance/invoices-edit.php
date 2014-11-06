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
    $sql = "SELECT * FROM invoices WHERE invoicesNR = $id";
    if (!$query = mysqli_query($con, $sql)) {
      echo 'Kan selectie niet uitvoeren.';
      die();
    }
    $row = mysqli_fetch_assoc($query);
    } 

  
   

  if ( isset($_POST['editInvoice']) ) {
  
  $description =mysqli_real_escape_string($con, $_POST['description']);
  $datum =mysqli_real_escape_string($con, $_POST['datum']);
  $price = mysqli_real_escape_string($con, $_POST['price']);
  $btw =mysqli_real_escape_string($con, $_POST['btw']);
  $quantity =mysqli_real_escape_string($con, $_POST['quantity']);
    
    $sql = "UPDATE invoices SET description='$description', datum='$datum', price='$price', btw='$btw', quantity='$quantity' WHERE invoicesNR = '$id' ";

  if  (!$query = mysqli_query($con, $sql)) {
    $msg = urlencode('Kan geen update uitvoeren.');
    header('location: index.php?msg=' . $msg);
    }
    $msg = urlencode('Invoice is succesfully updated.');
    header('location: index.php?msg=' . $msg);
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
      <li><a href="javascript:javascript:history.go(-1)">Invoices</a></li>
      <li class="active"><a href="#">Edit Invoice</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="http://localhost/GitHub/barrocit/app/development/logout.php">Log-out</a></li>
    </ul>
  </div>
</div>

<div class="page-header"><h2>Edit Invoice <?php echo $row['invoicesNR']?></h2></div>

<form action="" method="post" class="form-horizontal" roll="form">
      
        <div class="form-group">
            <label for="description" class="col-lg-2 control-label">Description</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="description" name="description" value="<?php echo $row['description']?>" required>
      </div>
   </div>
        <div class="form-group">
            <label for="datum" class="col-lg-2 control-label">Date Invoice</label>
          <div class="col-lg-10">
        <input type="date" class="form-control" id="datum" name="datum" value="<?php echo $row['datum']?>" required>
      </div>
   </div>
        <div class="form-group">
            <label for="price" class="col-lg-2 control-label">Price</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="price" name="price" value="<?php echo $row['price']?>" required>
      </div>
   </div>
      <div class="form-group">
            <label for="btw" class="col-lg-2 control-label">BTW</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="btw" name="btw" value="<?php echo $row['btw']?>" required>
      </div>
   </div>
      <div class="form-group">
            <label for="quantity" class="col-lg-2 control-label">Quantity</label>
          <div class="col-lg-10">
        <input type="number" class="form-control" id="quantity" name="quantity" value="<?php echo $row['quantity']?>" min="1" required>
      </div>
   </div>
      <div class="form-group">
            <label for="companyName" class="col-lg-2 control-label"></label>
          <div class="col-lg-10">
        <input  name="editInvoice" type="submit" value="Edit Invoice">
      </div>
   </div>

</form>
</div>

<footer>

</footer>
</body>
</html>


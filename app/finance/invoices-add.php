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

<img src="../images/menuBarrocit.png" width="1140" height= "400px;"/>

<div class="navbar navbar-default">
  <div class="navbar-header">
    <a class="navbar-brand">Finance</a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li><a href="index.php">Index</a></li>
      <li><a href="javascript:javascript:history.go(-1)">Invoices</a></li>
      <li class="active"><a href="#">Add Invoice</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="http://localhost/GitHub/barrocit/app/development/logout.php">Log-out</a></li>
    </ul>
  </div>
</div>

<div class="page-header"><h2>Add Invoice</h2></div>

<form action="../controllers/invoiceController.php" method="post" class="form-horizontal" roll="form">
        <div class="form-group">
            <label for="projectsNR" class="col-lg-2 control-label">Project Number</label>
          <div class="col-lg-10">
        <input class="form-control" id="projectsNR" name="projectsNR" value="<?php echo $row['projectsNR']?>"required>
      </div>
   </div>
        <div class="form-group">
            <label for="description" class="col-lg-2 control-label">Description</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="description" name="description" required>
      </div>
   </div>
        <div class="form-group">
            <label for="datum" class="col-lg-2 control-label">Date Invoice</label>
          <div class="col-lg-10">
        <input type="date" class="form-control" id="datum" name="datum" required>
      </div>
   </div>
        <div class="form-group">
            <label for="price" class="col-lg-2 control-label">Price</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="price" name="price" value="0.00" required>
      </div>
   </div>
      <div class="form-group">
            <label for="btw" class="col-lg-2 control-label">BTW</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="btw" name="btw" value=1.21 required>
      </div>
   </div>
      <div class="form-group">
            <label for="quantity" class="col-lg-2 control-label">Quantity</label>
          <div class="col-lg-10">
        <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1" required>
      </div>
   </div>
      <div class="form-group">
            <label for="companyName" class="col-lg-2 control-label"></label>
          <div class="col-lg-10">
        <input  name="createInvoice" type="submit" value="Create Invoice">
      </div>
   </div>

</form>
</div>

<footer>

</footer>
</body>
</html>


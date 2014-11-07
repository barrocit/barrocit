<?php session_start(); ?>
<?php include "../../config/config.php"; ?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapStyle.css">
	<title>Barroc-IT ~ Sales</title>
</head>

<body>
 
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
      <li class="active"><a href="#">Add Customer</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="http://localhost/GitHub/barrocit/app/development/logout.php">Log-out</a></li>
    </ul>
  </div>
</div>

<div class="page-header"><h2>Add Customer</h2></div>

<form action="../controllers/customerController.php" method="post" class="form-horizontal" roll="form">
        <div class="form-group">
            <label for="companyName" class="col-lg-2 control-label">Company Name*</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="companyName" name="companyName" required>
      </div>
   </div>
        <div class="form-group">
            <label for="address" class="col-lg-2 control-label">Address*</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="address" name="address" required>
      </div>
   </div>
        <div class="form-group">
            <label for="zipCode" class="col-lg-2 control-label">Zipcode*</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="zipCode" name="zipCode" required>
      </div>
   </div>
        <div class="form-group">
            <label for="residence" class="col-lg-2 control-label">Residence*</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="residence" name="residence" required>
      </div>
   </div>
        <div class="form-group">
            <label for="telephoneNumber" class="col-lg-2 control-label">Telephone Number*</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="telephoneNumber" name="telephoneNumber" required>
      </div>
   </div>
        <div class="form-group">
            <label for="faxNumber" class="col-lg-2 control-label">Fax Number</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="faxNumber" name="faxNumber">
      </div>
   </div>
        <div class="form-group">
            <label for="email" class="col-lg-2 control-label">E-mail*</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="email" name="email" required>
      </div>
   </div>
        <div class="form-group">
            <label for="appointments" class="col-lg-2 control-label">Appointments</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="appointments" name="appointments">
      </div>
   </div>
        <div class="form-group">
            <label for="lastcontactDate" class="col-lg-2 control-label">Last Contact Date*</label>
          <div class="col-lg-10">
        <input type="date" class="form-control" id="lastcontactDate" name="lastcontactDate" required>
      </div>
   </div>
        <div class="form-group">
            <label for="contactPerson" class="col-lg-2 control-label">Contact Person*</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="contactPerson" name="contactPerson" required>
      </div>
   </div>
        <div class="form-group">
            <label for="prospect" class="col-lg-2 control-label">Prospect*</label>
          <div class="col-lg-10">
        <select class="form-control" id="prospect" name="prospect" required>
			<option value="0">Ja</option>
			<option value="1">Nee</option>
        </select>
      </div>
   </div>
		<div class="form-group">
            <label for="companyName" class="col-lg-2 control-label"></label>
          <div class="col-lg-10">
        <input  name="createCustomer" type="submit" value="Create Customer">
      </div>
   </div>

</form>
</div>

<footer>

</footer>
</body>
</html>


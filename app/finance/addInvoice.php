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


<form action="../controllers/invoiceController.php" method="post" class="form-horizontal" roll="form">
      <legend>Add invoice:</legend>
        
        <div class="form-group">
            <label for="datum" class="col-lg-2 control-label">Date</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="datum" name="datum">
      </div>
   </div>
        <div class="form-group">
            <label for="amount" class="col-lg-2 control-label">Amount</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="amount" name="amount">
      </div>
   </div>
        <div class="form-group">
            <label for="btw" class="col-lg-2 control-label">BTW</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="btw" name="btw">
      </div>
   </div>
      <div class="form-group">
            <label for="companyName" class="col-lg-2 control-label">Company Name</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="companyName" name="companyName">
      </div>
   </div>
<input  name="createInvoice" type="submit" value="Create Invoice">

</form>
</div>

<footer>

</footer>
</body>
</html>


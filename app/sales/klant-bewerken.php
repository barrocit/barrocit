<?php session_start(); 

if (! isset($_SESSION['name']) ) 
{
    header('location: ../error1.php');
}

if ($_SESSION ['gebruikersrol'] !='4' AND '3')
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

  
   

  if ( isset($_POST['editCustomer']) ) {
  
	$companyName = mysqli_real_escape_string($con, $_POST['companyName']);
	$address =mysqli_real_escape_string($con, $_POST['address']);
	$zipCode =mysqli_real_escape_string($con, $_POST['zipCode']);
	$residence = mysqli_real_escape_string($con, $_POST['residence']);
	$telephoneNumber =mysqli_real_escape_string($con, $_POST['telephoneNumber']);
	$faxNumber =mysqli_real_escape_string($con, $_POST['faxNumber']);
	$email =mysqli_real_escape_string($con, $_POST['email']);
	$appointments =mysqli_real_escape_string($con, $_POST['appointments']);
	$lastcontactDate =mysqli_real_escape_string($con, $_POST['lastcontactDate']);
	$contactPerson =mysqli_real_escape_string($con, $_POST['contactPerson']);
	$prospect =mysqli_real_escape_string($con, $_POST['prospect']);
    
    $sql = "UPDATE customer SET companyName='$companyName', address='$address', zipCode='$zipCode', residence='$residence', telephoneNumber='$telephoneNumber', faxNumber='$faxNumber', email='$email', appointments='$appointments', lastcontactDate='$lastcontactDate', contactPerson='$contactPerson', prospect='$prospect' WHERE customerNR = '$id' ";

    $query = mysqli_query($con, $sql);

  if  (!$query = mysqli_query($con, $sql)) {
    $fout = urlencode('Kan geen update uitvoeren.');
    header('location: index.php?msg=' . $fout);
    }
    $msg = urlencode('Customer is succesfully updated.');
    header('location: index.php?msg=' . $msg);
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
      <li class="active"><a href="klant-bewerken.php?id=<?php echo $row['customerNR']; ?>">Edit Customer</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="http://localhost/GitHub/barrocit/app/development/logout.php">Log-out</a></li>
    </ul>
  </div>
</div>

<div class="page-header"><h2>Edit Customer</h2></div>

<form action="" method="post" class="form-horizontal" roll="form">
      
                <div class="form-group">
            <label for="companyName" class="col-lg-2 control-label">Company Name*</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="companyName" name="companyName" value="<?php echo $row['companyName']?>" required>
      </div>
   </div>
        <div class="form-group">
            <label for="address" class="col-lg-2 control-label">Address*</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="address" name="address" value="<?php echo $row['address']?>" required>
      </div>
   </div>
        <div class="form-group">
            <label for="zipCode" class="col-lg-2 control-label">Zipcode*</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="zipCode" name="zipCode" value="<?php echo $row['zipCode']?>" required>
      </div>
   </div>
        <div class="form-group">
            <label for="residence" class="col-lg-2 control-label">Residence*</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="residence" name="residence" value="<?php echo $row['residence']?>" required>
      </div>
   </div>
        <div class="form-group">
            <label for="telephoneNumber" class="col-lg-2 control-label">Telephone Number*</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="telephoneNumber" name="telephoneNumber" value="<?php echo $row['telephoneNumber']?>" required>
      </div>
   </div>
        <div class="form-group">
            <label for="faxNumber" class="col-lg-2 control-label">Fax Number</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="faxNumber" name="faxNumber" value="<?php echo $row['faxNumber']?>">
      </div>
   </div>
        <div class="form-group">
            <label for="email" class="col-lg-2 control-label">E-mail*</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email']?>" required>
      </div>
   </div>
        <div class="form-group">
            <label for="appointments" class="col-lg-2 control-label">Appointments</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="appointments" name="appointments" value="<?php echo $row['appointments']?>">
      </div>
   </div>
        <div class="form-group">
            <label for="lastcontactDate" class="col-lg-2 control-label">Last Contact Date*</label>
          <div class="col-lg-10">
        <input type="date" class="form-control" id="lastcontactDate" name="lastcontactDate" value="<?php echo $row['lastcontactDate']?>" required>
      </div>
   </div>
        <div class="form-group">
            <label for="contactPerson" class="col-lg-2 control-label">Contact Person*</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="contactPerson" name="contactPerson" value="<?php echo $row['contactPerson']?>" required>
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
            <label for="editCustomer" class="col-lg-2 control-label"></label>
          <div class="col-lg-10">
        <input name="editCustomer" type="submit" value="Update Customer">
      </div>
   </div>

</form>
</div>

<footer>

</footer>
</body>
</html>


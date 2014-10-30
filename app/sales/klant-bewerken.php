<?php session_start(); ?>
<?php include "../../config/config.php"; ?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapStyle.css">
	<title>Sales</title>
    <header>
		<h1>Klant Bewerken</h1>
	</header>
</head>
<body>
<div class="container">
<div class="navbar navbar-default">
  <div class="navbar-header">
    <a class="navbar-brand" href="index.php">Home</a>
    <a class="navbar-brand" href="klant-aanmaken.php">Klant aanmaken</a>
  </div>
  </div>
    <?php
	if( isset($_GET['id']) ) {
		$id = $_GET['id'];
		$sql = "SELECT * FROM customer WHERE customerNR = '$id'";
		if (!$query = mysqli_query($con, $sql)) {
			echo 'Kan selectie niet uitvoeren.';
			die();
		}

		$row = mysqli_fetch_assoc($query);

	} else {
		header('location: index.php');
	}	

	if ( isset($_POST['submit']) ) {
		$companyName = mysqli_real_escape_string($con, $_POST['companyName']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $zipCode = mysqli_real_escape_string($con, $_POST['zipCode']);
        $residence = mysqli_real_escape_string($con, $_POST['residence']);
        $telephoneNumber = mysqli_real_escape_string($con, $_POST['telephoneNumber']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $appointments = mysqli_real_escape_string($con, $_POST['appointments']);
        $lastcontactDate = mysqli_real_escape_string($con, $_POST['lastcontactDate']);
        $contactPerson = mysqli_real_escape_string($con, $_POST['contactPerson']);
        $prospect = mysqli_real_escape_string($con, $_POST['prospect']);
        
		$sql = "UPDATE customer SET companyName = '$companyName', address = '$address', zipCode = '$zipCode', residence = '$residence', telephoneNumber = '$telephoneNumber', email = '$email', appointments = '$appointments', lastcontactDate = '$lastcontactDate', contactPerson = 'contactPerson', prospect = '$prospect'  WHERE customerNR = '$customerNR'";

	if	(!$query = mysqli_query($con, $sql)) {
			echo 'Kan geen update uitvoeren.';
			die();
		}
		$msg = urlencode('Klant is succesvol bewerkt.');
		header('location: index.php?msg=' . $msg);
	}
?>
    <form action="" method="POST">
				<div class="width-tabel"><label for="companyName">Company Name:</label></div>
				<input type="text" name="companyName" id="companyName" value="<?php echo $row['companyName']; ?> ">
                <div class="width-tabel"><label for="address">Address:</label></div>
				<input type="text" name="address" id="address" value="<?php echo $row['address']; ?>">
                <div class="width-tabel"><label for="zipCode">Zipcode:</label></div>
				<input type="text" name="zipCode" id="zipCode" value="<?php echo $row['zipCode']; ?>">
                <div class="width-tabel"><label for="residence">Residence:</label></div>
				<input type="text" name="residence" id="residence" value="<?php echo $row['residence']; ?>">
                <div class="width-tabel"><label for="telephoneNumber">TelephoneNumber:</label></div>
				<input type="text" name="telephoneNumber" id="telephoneNumber" value="<?php echo $row['telephoneNumber']; ?>">
				<div class="width-tabel"></div>
				<input name="submit" type="submit" value="Update Klant" id="button">
			</form>
</div>
</body>
</html>  
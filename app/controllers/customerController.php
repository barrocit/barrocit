<?php

require '../../config/config.php';

if ( isset($_POST['createCustomer']) ) 
{
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
	
	$sql = "INSERT INTO customer (companyName, address, zipCode, residence, telephoneNumber, faxNumber, email, appointments, lastcontactDate, contactPerson, prospect)
			VALUES (
					'$companyName',
					'$address',
					'$zipCode',
					'$residence',
					'$telephoneNumber',
					'$faxNumber',
					'$email',
					'$appointments',
					'$lastcontactDate',
					'$contactPerson',
					'$prospect'
				)";

	$query = mysqli_query($con, $sql);

	if (!$query) {
		$fout = urlencode(trigger_error('query niet gelukt. geprobeerde query was ' . $sql));
		header('location: ../sales/index.php?msg='.$fout);	
	}

	$msg = urlencode('Customer is succesfully created.');
	header ('location: ../sales/index.php?msg='.$msg);
}


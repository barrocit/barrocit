<?php

require '../../config/config.php';

if ( isset($_POST['createInvoice']) ) 
{
	$projectsNR = 51;
	$datum           =mysqli_real_escape_string($con, $_POST['datum']);
	$amount      =mysqli_real_escape_string($con, $_POST['amount']);
	$btw      =mysqli_real_escape_string($con, $_POST['btw']);
	$companyName      =mysqli_real_escape_string($con, $_POST['companyName']);
	
	$sql = "INSERT INTO invoices (projectsNR, datum, amount, btw, companyName)
			VALUES (
					'$projectsNR',
					'$datum',
					'$amount',
					'$btw',
					'$companyName'
				)";

	$query = mysqli_query($con, $sql);

	if (!$query) {
		$msg = urlencode(trigger_error('query niet gelukt. geprobeerde query was ' . $sql));
		header('location: ../finance/index.php?msg='.$msg);	
	}

	$msg = urlencode('Invoice is succesfully created.');
	header ('location: ../finance/index.php?msg='.$msg);
}


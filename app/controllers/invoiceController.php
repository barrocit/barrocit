<?php

require '../../config/config.php';

if ( isset($_POST['createInvoice']) ) 
{
	$projectsNR = mysqli_real_escape_string($con, $_POST['projectsNR']);
	$description =mysqli_real_escape_string($con, $_POST['description']);
	$datum =mysqli_real_escape_string($con, $_POST['datum']);
	$price = mysqli_real_escape_string($con, $_POST['price']);
	$btw =mysqli_real_escape_string($con, $_POST['btw']);
	$quantity =mysqli_real_escape_string($con, $_POST['quantity']);
	
	$sql = "INSERT INTO invoices (projectsNR, description, datum, price, btw, quantity)
			VALUES (
					'$projectsNR',
					'$description',
					'$datum',
					'$price',
					'$btw',
					'$quantity'
				)";

	$query = mysqli_query($con, $sql);

	if (!$query) {
		$msg = urlencode(trigger_error('query niet gelukt. geprobeerde query was ' . $sql));
		header('location: ../finance/index.php?msg='.$msg);	
	}

	$msg = urlencode('Invoice is succesfully created.');
	header ('location: ../finance/index.php?msg='.$msg);
}


<?php

require '../../config/config.php';

if ( isset($_POST['createUser']) ) 
{
	$name      =mysqli_real_escape_string($con, $_POST['name']);
	$gebruikersrol           =mysqli_real_escape_string($con, $_POST['gebruikersrol']);
	$password      =mysqli_real_escape_string($con, $_POST['password']);

	
	$sql = "INSERT INTO users (name, gebruikersrol, password)
			VALUES (
					'$name',
					'$gebruikersrol',
					'$password'
				)";

	$query = mysqli_query($con, $sql);

	if (!$query) {
		$msg = urlencode(trigger_error('query niet gelukt. geprobeerde query was ' . $sql));
		header('location: ../admin.php?msg='.$msg);	
	}

	$msg = urlencode('User ' . $name . ' is succesfully created.');
	header ('location: ../admin.php?msg='.$msg);
}


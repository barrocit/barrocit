<?php

require '../../config/config.php';

if ( isset($_POST['createUser']) ) 
{
	$name      =mysqli_real_escape_string($con, $_POST['name']);
	$gebruikersrol           =mysqli_real_escape_string($con, $_POST['gebruikersrol']);
	
	// GROVE FOUT HIERONDER!!!!!!!!!! gaan we straks fixen!!
	$password      =mysqli_real_escape_string($con, $_POST['password']);

	/*
	* Verandering voor bij de laatste oefening:
	*
	*/

	/* $hashed = password_hash($password, PASSWORD_DEFAULT); */


	// voor de laatste oefening, verander de $password naar $hashed.
	
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


<?php
if ( ! isset($_SESSION['name']) ) {
	$msg = urlencode('U dient ingelogd te zijn');
	header('location: login.php?msg=' . $msg);
}

$role = $_SESSION['role'];

switch($role) {
	case 1:
		header('location: finance');
		break;
	case 2:
		header('location: development');
		break;
	case 3:
		header('location: sales');
		break;
	default:
		header('location: controllers/authController.php?logout=true');
		break;	
}
?>







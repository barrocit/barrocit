<?php session_start(); ?>
<?php
if ( ! isset($_SESSION['name']) ) {
	$msg = urlencode('U dient ingelogd te zijn');
	header('location: login.php?msg=' . $msg);
}

$role = $_SESSION['gebruikersrol'];

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
	case 4:
		header('location: administrator');
		break;
	default:
		header('location: controllers/authController.php?logout=true');
		break;	
}
?>








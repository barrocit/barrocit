<?php require 'templates/header.php'; ?>

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
		header('location: rd');
		break;
	case 3:
		header('location: hrm');
		break;
	case 4:
		header('location: it');
		break;
	case 5:
		header('location: admin');
		break;
	default:
		header('location: controllers/authController.php?logout=true');
		break;	
}
?>


<?php require 'templates/footer.php'; ?>









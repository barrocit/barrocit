<?php
	require '../../config/config.php';

	if ( isset($_POST['authUser']) ) {

	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);	

    $sql = "SELECT email, password, gebruikersrol FROM users WHERE email = '$email' AND password = '$password'";
    if (! $query = mysqli_query($con, $sql) ) {
    	trigger_error('Check de SQL op fouten');
    }

    if ( mysqli_num_rows($query) == 1 ) {
    	$row = mysqli_fetch_assoc($query);
    	
    	if ($password == $row['password'] ) {
    		echo 'logged in!';
    		session_start();
    		$_SESSION['name'] = $row['email'];
    		$_SESSION['role'] = $row['gebruikersrol'];
            header('location: ../index.php');
    	} else {
    		$msg = 'Gebruikersnaam of wachtwoord onjuist';
    		header('location: ../login.php?msg=' . $msg);
    	}
    }

    // handelt de uitlog af

    
	}
    if ( isset($_GET['logout'])) {
        session_destroy();
        $msg = urlencode("U bent succesvol uitgelogd.");
        header('location: ../login.php?msg=' . $msg);
    }

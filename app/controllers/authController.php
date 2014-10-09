<?php session_start(); ?>
<?php
require '../../config/config.php';

//handelt  de inlog af
if ( isset($_POST['authUser'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $sql = "SELECT name, password, gebruikersrol FROM users WHERE name = '$name' AND password = '$password'";

    if(! $query = mysqli_query($con, $sql)){
        trigger_error('SQL CHECK!!!');
    }

    if(mysqli_num_rows($query) == 1){
        $row = mysqli_fetch_assoc($query);

             $_SESSION['name'] = $row['name'];
            $_SESSION['gebruikersrol'] = $row['gebruikersrol'];
            header('location:../index.php');
      
    }
    else{

            $msg = urlencode('Username or password is incorrect.');
            header('location: ../login.php?msg=' . $msg );
        }
}

//handelt de uitlog af 
if (isset($_GET['logout'])) {
    session_destroy();
    $msg = urlencode("U are succesfully logged out.");
    header('location:../login.php?msg='. $msg );    
}
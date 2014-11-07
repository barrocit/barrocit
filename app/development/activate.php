 <?php session_start(); ?>
<?php include "../../config/config.php"; ?>
  <?php 
if ( isset($_GET['id']) )
    {
      $id = $_GET['id'];
      $sql = "UPDATE customer SET active=0 WHERE customerNR = '$id'";

      if (!$query = mysqli_query($con, $sql)) {
        echo 'delete query is niet goed gegaan';
        die();
      }
    $msg = urlencode('Customer is succesfully activated.');
      header('location: index.php?msg='.$msg);
    }
?>
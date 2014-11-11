 <?php session_start(); ?>
<?php include "../../config/config.php"; ?>
  <?php 
if ( isset($_GET['id']) )
    {
      $id = $_GET['id'];
      $sql = "UPDATE projects SET active=0 WHERE projectsNR = '$id'";

      if (!$query = mysqli_query($con, $sql)) {
        echo 'delete query is niet goed gegaan';
        die();
      }
    $msg = urlencode('Project is succesfully activated.');
      header('location: index.php?msg='.$msg);
    }
?>
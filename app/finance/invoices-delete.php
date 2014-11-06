<?php session_start(); ?>
<?php include "../../config/config.php"; ?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapStyle.css">
	<title>Barroc-IT ~ Finance</title>
</head>

<body>

  <?php 
if ( isset($_GET['id']) )
    {
      $id = $_GET['id'];
      $sql = "UPDATE invoices SET active=1 WHERE invoicesNR = '$id'";

      if (!$query = mysqli_query($con, $sql)) {
        echo 'delete query is niet goed gegaan';
        die();
      }
    $msg = urlencode('Invoice is succesfully deactivated.');
      header('location: index.php?msg='.$msg);
    }
?>
	<header>
    
	</header>

<div class="container">

<img src="../images/jumbotronfi.jpg" width="1140" height= "400px;"/>
<div class="page-header"><h2>Deactivate Invoice <a href="index.php" align="right" class="btn btn-danger">Go Back</a></h2></div>

  <div class="alert alert-dismissable alert-danger">
  Are you sure to deactivate invoice <?php echo $row['invoicesNR']?>? <br><br><a href="#" class="alert-link">Deactivate</a> 
</div>
</div>

<footer>

</footer>
</body>
</html>


<?php session_start(); 

if (! isset($_SESSION['name']) ) 
{
    header('location: ../error1.php');
}

if ($_SESSION ['gebruikersrol'] !='3' && $_SESSION ['gebruikersrol'] != '4')
{
    header('location: ../error2.php');
}
?>
<?php include "../../config/config.php"; ?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapStyle.css">
	<title>Barroc-IT ~ Sales</title>
    <header>
		
	</header>
</head>
<body>
    <div class="container">
<img src="../images/menuBarrocit.png" width="1140" height= "400px;"/>
<div class="navbar navbar-default">
  <div class="navbar-header">
    <a class="navbar-brand">Sales</a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li><a href="index.php">Index</a></li>
      <li class="active"><a href="dacustomers.php">Deactivated Customers</a></li>
      <li><a href="klant-aanmaken.php">Add Customer</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php
      if ($_SESSION ['gebruikersrol'] !='4')
      {}else {
      echo'<li><a href="../admin.php">Admin</a></li>';
      }?>
      <li><a href="http://localhost/GitHub/barrocit/app/development/logout.php">Log-out</a></li>
    </ul>
  </div>
</div>

<?php  
    // succes of fail message
    if (isset($_GET['msg'])) {
    echo '<div class="alert alert-dismissable alert-success">' . htmlspecialchars($_GET['msg']) . '</div>' ;
    }
    ?>
    <?php  
    // succes of fail message
    if (isset($_GET['fout'])) {
    echo '<div class="alert alert-dismissable alert-danger">' . htmlspecialchars($_GET['fout']) . '</div>' ;
    }
    ?>

    <div class="page-header"><h2>Customers</h2></div>

  <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <td class="col-sm-2"><strong>See Customer</strong></td>                            
                            <td class="col-sm-2"><strong>Company Name</strong></td>
                            <td class="col-sm-3"><strong>Address</strong></td>        
                            <td class="col-sm-1"><strong>Zipcode</strong></td>
                            <td class="col-sm-2"><strong>Residence</strong></td>
                            <td class="col-sm-2"><strong>E-mail</strong></td>        
                            <td class="col-sm-1"><strong>Prospect</strong></td>
                            <td class="col-sm-1"><strong>Activate</strong></td>  
                        </tr>
                <?php       
                     $sql = "SELECT * FROM customer WHERE active = 1";
                     $query = mysqli_query($con, $sql);
          

                     while ($row = mysqli_fetch_assoc($query)){
                     echo '<tr><td><a href="klant-inzien.php?id=' . $row['customerNR'] .'"><img src="http://localhost/GitHub/barrocit/app/development/search.png"></a></td>';
                     echo '<td>' . $row['companyName'] . '</td>';
                     echo '<td>' . $row['address'] . '</td>';
                     echo '<td>' . $row['zipCode'] . '</td>';
                     echo '<td>' . $row['residence'] . '</td>';
                     echo '<td>' . $row['email'] . '</td><td>';
                     if( $row['prospect'] == 0)
                    {
                        echo "Ja";
                    }
                    if( $row['prospect'] == 1)
                    {
                        echo "Nee";
                    }

                  
                     echo '<td> <a href="activate.php?id=' . $row['customerNR'] .'"><img src="http://localhost/GitHub/barrocit/app/development/vink.png"></a>' . '</td></tr>';
                }

                ?>
                    </thead>
</div>
</body>
<footer>

</footer>
</body>
</html>
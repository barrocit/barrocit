<?php session_start(); 
if (! isset($_SESSION['name']) ) 
{
    header('location: ../error1.php');
}

if ($_SESSION ['gebruikersrol'] !='4' AND '2')
{
    header('location: ../error2.php');
}?>
<?php 	require '../../config/config.php';?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapStyle.css">
	<title>Barroc-IT ~ Development</title>
</head>

<body>
<?php

  if ( isset($_GET['customerNR']) ) {
    $customerNR = $_GET['customerNR'];
    $sql = "SELECT * FROM customer WHERE customerNR = '$customerNR' ";
  }

  if (isset($_POST['submit'])) {
    // var_dump($_POST); die();
    $customerNR = $_GET['customerNR'];
    $maintenanceContract  = $_POST['maintenanceContract'];
    $software = $_POST['software'];
    $hardware = $_POST['hardware'];
    $description  = $_POST['description'];
  

  if ($query  = mysqli_query($con, "INSERT INTO projects(customerNR, maintenanceContract, software, hardware, description) VALUES ('$customerNR', '$maintenanceContract', '$software', '$hardware', '$description')"))
  {
    header('location:projects.php?customerNR=' . $customerNR); 
  }else{
    echo "kan data niet toevoegen aan database";
  }

}
  ?>

<div class="container">
	
<img src="../images/menuBarrocit.png" width="1140" height= "400px;"/>

<div class="navbar navbar-default">
  <div class="navbar-header">
    <a class="navbar-brand">Development</a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li><a href="index.php">Index</a></li>
      <li><a href="projects.php?customerNR=<?php echo $_GET['customerNR']; ?>">Projects</a></li>
      <li class="active"><a href="deactivatedprojects.php?customerNR=<?php echo $_GET['customerNR']; ?>">Deactivated Projects</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="http://localhost/GitHub/barrocit/app/development/logout.php">Log-out</a></li>
    </ul>
  </div>
</div>

<div class="page-header"><h2>Projects</h2></div>

<table class="table table-striped table-hover ">
	<thead>
		<tr>
			<th>Maintenance contract</th>
			<th>Software</th>
			<th>Hardware</th>
			<th>Description</th>
			<th>Activate</th>
		</tr>
	</thead>	
<tbody>
        <?php
          $sql = "SELECT * FROM projects WHERE customerNR = '$customerNR' AND active=1";
          $query = mysqli_query($con, $sql);
          
          while ($row = mysqli_fetch_assoc($query)){
            echo '<tr>';
            $maintenance = $row['maintenanceContract'] == 1 ? 'Yes' : 'No';
            echo'<td>' . $maintenance . '</td>';
            echo'<td>' . $row['software'] . '</td>';
            echo'<td>' . $row['hardware'] . '</td>';
            echo'<td>' . $row['description'] . '</td>';
            echo '<td> <a href="activate.php?id=' . $row['projectsNR'] . '"><img src="vink.png"></a></td></tr>';
            echo '</tr>';

          }
        ?>   
</tbody>
</table> 


</div>

</body>
</html>
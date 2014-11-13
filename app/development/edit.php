<?php session_start();


if (! isset($_SESSION['name']) ) 
{
    header('location: ../error1.php');
}

if ($_SESSION ['gebruikersrol'] !='2' && $_SESSION ['gebruikersrol'] != '4')
{
    header('location: ../error2.php');
}

include "../../config/config.php";

if (isset($_GET['projectsNR'])) {
		$projectsNR= $_GET['projectsNR'];
		$sql = "SELECT * FROM projects WHERE projectsNR= '$projectsNR' ";
		if(!$query = mysqli_query($con, $sql) ){
			echo "Kan de selectie niet uitvoeren";
			die();
		}
		$row= mysqli_fetch_assoc($query); 
	}
	else{
		header('location: projects.php?');
	}

if (isset($_POST['submit'])) {
		$customerNR= $_GET['customerNR'];
		$maintenanceContract = mysqli_real_escape_string($con, $_POST['maintenanceContract']);
		$software = mysqli_real_escape_string($con, $_POST['software']);
		$hardware = mysqli_real_escape_string($con, $_POST['hardware']);
		$description = mysqli_real_escape_string($con, $_POST['description']);

		$sql = "UPDATE projects SET maintenanceContract= '$maintenanceContract', software= '$software', hardware='$hardware', description='$description' WHERE projectsNR= '$projectsNR' ";

		if (!$query = mysqli_query($con, $sql)) {
			echo "can't upload";
			die();
		}
		$msg= urlencode("Succesfully updated");
		header('location: projects.php?customerNR=' . $customerNR . '');
	}    
	
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapStyle.css">
	<title>development</title>
</head>

<body>

<div class="container">

<img src="../images/menuBarrocit.png" width="1140" height= "400px;"/>

<div class="navbar navbar-default">
  <div class="navbar-header">
    <a class="navbar-brand">Development</a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li><a href="index.php">Index</a></li>
      <li><a href="javascript:javascript:history.go(-1)">Projects</a></li>
      <li class="active"><a href="#">Edit Project</a></li>
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

<div class="page-header"><h2>Edit Project</h2></div>

<form action="" method="POST" class="form-horizontal">
<div class="form-group">
            <label for="maintenanceContract" class="col-lg-2 control-label">Maintenance Contract</label>
          <div class="col-lg-10">
        <input type="radio" class="" id="maintenanceContract" name="maintenanceContract" value="1"> Yes</input><br>
       	<input type="radio" class="" id="maintenanceContract" name="maintenanceContract" value="0"> No</input>
      </div>
   </div>
        <div class="form-group">
            <label for="software" class="col-lg-2 control-label">Software</label>
          <div class="col-lg-10">
        <input type="date" class="form-control" id="software" name="software" value="<?php echo $row['software'] ?>" required>
      </div>
   </div>
        <div class="form-group">
            <label for="hardware" class="col-lg-2 control-label">Hardware</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="hardware" name="hardware" value="<?php echo $row['hardware'] ?>" required>
      </div>
   </div>
      <div class="form-group">
            <label for="description" class="col-lg-2 control-label">Description</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="description" name="description" value="<?php echo $row['description'] ?>" required>
      </div>
   </div>
      <div class="form-group">
            <label for="editProject" class="col-lg-2 control-label"></label>
          <div class="col-lg-10">
        <input  name="submit" type="submit" value="Edit Project">
      </div>
   </div>
</form>


</body>
</div>
</html>
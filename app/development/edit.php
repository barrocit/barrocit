<?php session_start();
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
    <a class="navbar-brand" href="index.php">Home</a>
    <a class="navbar-brand" href="deactivatedprojects.php">Deactivated projects</a>
    <a class="navbar-brand" href="logout.php">Log out</a>
  </div>
</div>

<form action="" method="POST">
				<label for="maintenanceContract" class="">Maintenance contract:</label><br>
        			<input type="radio" class="" id="maintenanceContract" name="maintenanceContract" value="1">Yes
       				<input type="radio" class="" id="maintenanceContract" name="maintenanceContract" value="0">No
                <div class="width-tabel"><label for="software">Software:</label></div>
				<input type="text" class="form-control" name="software" id="software" value="<?php echo $row['software'] ?>">
                <div class="width-tabel"><label for="hardware">Hardware:</label></div>
				<input type="text" class="form-control" name="hardware" id="hardware" value="<?php echo $row['hardware'] ?>">
                <div class="width-tabel"><label for="description">Description:</label></div>
				<input type="text" class="form-control" name="description" id="description" value="<?php echo $row ['description'] ?>"><br>
				<input name="submit" type="submit" value="Update customer" id="button">
			</form>


</body>
</div>
</html>
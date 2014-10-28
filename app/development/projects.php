<?php 	require '../../config/config.php';?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapStyle.css">
	<title>development</title>
</head>
<?php

	if ( isset($_GET['customerNR']) ) {
		$customerNR = $_GET['customerNR'];
		$sql = "SELECT * FROM customer WHERE customerNR = '$customerNR' ";
	}

	if (isset($_POST['submit'])) {
/*		$customerNR	=	$_POST['customerNR'];*/
		$maintenanceContract	=	$_POST['maintenanceContract'];
		$software	=	$_POST['software'];
		$hardware	=	$_POST['hardware'];
		$description	=	$_POST['description'];
	

	if (!$query 	= mysqli_query($con, "INSERT INTO projects(maintenanceContract, software, hardware, description) VALUES ('$maintenanceContract', '$software', '$hardware', '$description')")) {
	
	}else{
		echo "kan data niet toevoegen aan database";
	}

}
	?>
<body>


<div class="container">
	
<img src="../images/menuBarrocit.png" width="1140" height= "400px;"/>

<div class="navbar navbar-default">
	<div class="navbar-header">
    	<a class="navbar-brand" href="index.php">Home</a>
    	<a class="navbar-brand" href="addProject.php">Add project</a>
    	<a class="navbar-brand" href="deactivateprojects.php">Deactivated projects</a>
	</div>
</div>

<table class="table table-striped table-hover ">
	<thead>
		<tr>
			<th>Maintenance contract</th>
			<th>Software</th>
			<th>Hardware</th>
			<th>Description</th>
			<th>Deactivate</th>
		</tr>
	</thead>	
<tbody>
        <?php
          $sql = "SELECT * FROM projects WHERE customerNR = '$customerNR'";
          $query = mysqli_query($con, $sql);
          
          while ($row = mysqli_fetch_assoc($query)){
            echo '<tr>';
            echo'<td>' . $row['maintenanceContract'] . '</td>';
            echo'<td>' . $row['software'] . '</td>';
            echo'<td>' . $row['hardware'] . '</td>';
            echo'<td>' . $row['description'] . '</td>';
            echo '<td> <a href="deactivateProject.php?id=' . $row['customerNR'] . '"><img src="verwijderen.png"></a> </td></tr>';
            echo '</tr>';

          }
        ?>   
</tbody>
</table> 

<form action"#" method="POST" class="form-horizontal">
      <legend>Add project:</legend>
        <div class="form-group">
            <label for="maintenanceContract" class="col-lg-2 control-label">Maintenance contract</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="maintenanceContract" name="maintenanceContract">
      </div>
   </div>
        <div class="form-group">
            <label for="software" class="col-lg-2 control-label">Software</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="software" name="software">
      </div>
   </div>
        <div class="form-group">
            <label for="hardware" class="col-lg-2 control-label">Hardware</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="hardware" name="hardware">
      </div>
   </div>
        <div class="form-group">
            <label for="description" class="col-lg-2 control-label">Description</label>
          <div class="col-lg-10">
        <input type="text" class="form-control" id="description" name="description">
      </div>
   </div>
<input  name="submit" type="submit" value="Add">

</form>

</div>

</body>
</html>
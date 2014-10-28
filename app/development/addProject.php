<?php session_start(); ?>
<?php include "../../config/config.php"; ?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapStyle.css">
	<title>development</title>
</head>

<body>
	<header>
    
	</header>

<div class="container">

<img src="../images/menuBarrocit.png" width="1140" height= "400px;"/>

<div class="navbar navbar-default">
  <div class="navbar-header">
    <a class="navbar-brand" href="index.php">Home</a>
    <a class="navbar-brand" href="addProject.php">Add project</a>
    <a class="navbar-brand" href="deactivateprojects.php">Deactivated projects</a>
  </div>
</div>

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



<footer>

</footer>
</body>
</div>
</html>
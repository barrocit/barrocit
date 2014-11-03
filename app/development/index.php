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
    <a class="navbar-brand" href="deactivatedprojects.php">Deactivated projects</a>
    <a class="navbar-brand" href="logout.php">Logout</a>

  </div>
</div>

<table class="table table-striped table-hover ">
    <thead>
      <tr>
        <th>Company name</th>
        <th>Contact person</th>
        <th>Address</th>
        <th>Zip code</th>
        <th>Residence</th>
        <th>Telephone number</th>
        <th>Fax number</th>
        <th>Email</th>
        <th>Open projects</th>
      </tr>
    </thead>

    <tbody>
        <?php
          $sql = "SELECT * FROM customer";
          $query = mysqli_query($con, $sql);
          

          while ($row = mysqli_fetch_assoc($query)){
            echo '<tr><td><a href="projects.php?customerNR=' . $row['customerNR'] . '">' . $row['companyName'] . '</a></td>';
            echo '<td><a href="projects.php?customerNR=' . $row['customerNR'] . '">' . $row['contactPerson'] . '</a></td>';
            echo '<td><a href="projects.php?customerNR=' . $row['customerNR'] . '">' . $row['address'] . '</a></td>';
            echo '<td><a href="projects.php?customerNR=' . $row['customerNR'] . '">' . $row['zipCode'] . '</a></td>';
            echo '<td><a href="projects.php?customerNR=' . $row['customerNR'] . '">' . $row['residence'] . '</a></td>';
            echo '<td><a href="projects.php?customerNR=' . $row['customerNR'] . '">' . $row['telephoneNumber'] . '</a></td>';
            echo '<td><a href="projects.php?customerNR=' . $row['customerNR'] . '">' . $row['faxNumber'] . '</a></td>';
            echo '<td><a href="projects.php?customerNR=' . $row['customerNR'] . '">' . $row['email'] . '</a></td>';
            echo '<td><a href="projects.php?customerNR=' . $row['customerNR'] . '">' . $row['openProjects'] . '</a></td>';
          }
        ?>   
    </tbody>
  </table> 
</div>

<footer>

</footer>
</body>
</html>
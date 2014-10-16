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

<img src="../images/jumbotrondev.jpg" width="1140" height= "400px;"/>

<div class="navbar navbar-default">
  <div class="navbar-header">
    <a class="navbar-brand" href="#">Home</a>
    <a class="navbar-brand" href="#">Project</a>
    <a class="navbar-brand" href="#">Deactivated projects</a>
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
        <th>Deactivate</th>
      </tr>
    </thead>

    <tbody>
        <?php
          $sql = "SELECT * FROM customer";
          $query = mysqli_query($con, $sql);
          

          while ($row = mysqli_fetch_assoc($query)){
            echo '<tr><td>' . $row['companyName'] . '</td>';
            echo '<td>' . $row['contactPerson'] . '</td>';
            echo '<td>' . $row['address'] . '</td>';
            echo '<td>' . $row['zipCode'] . '</td>';
            echo '<td>' . $row['residence'] . '</td>';
            echo '<td>' . $row['telephoneNumber'] . '</td>';
            echo '<td>' . $row['faxNumber'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['openProjects'] . '</td>';
            echo '<td> <a href="deactivateProject.php?id=' . $row['customerNR'] . '"><img src="verwijderen.png"></a> </td></tr>';
          }
        ?>   
    </tbody>
  </table> 
</div>

<footer>

</footer>
</body>
</html>
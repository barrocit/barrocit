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
	<header>
    
	</header>

<div class="container">

<img src="../images/jumbotronfi.jpg" width="1140" height= "400px;"/>

<div class="page-header"><h2>Customers</h2></div>

<table class="table table-striped table-hover ">
    <thead>
      <tr>
        <th>Company Name</th>
        <th>Contact Person</th>
        <th>Telephone Number</th>
        <th>Email</th>
        <th>Open Projects</th>
        <th>See Projects</th>
      </tr>
    </thead>
    <tbody>
        <?php
          $sql = "SELECT * FROM customer";
          $query = mysqli_query($con, $sql);
          

          while ($row = mysqli_fetch_assoc($query)){
            echo '<tr><td>' . $row['companyName'] . '</td>';
            echo '<td>' . $row['contactPerson'] . '</td>';
            echo '<td>' . $row['telephoneNumber'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['openProjects'] . '</td>';
            echo '<td> <a href="projects.php?id=' . $row['customerNR'] . '"><img src="http://localhost/GitHub/barrocit/app/development/bewerken.png"></a> </td></tr>';
          }
        ?>   
    </tbody>
  </table> 
</div>
<footer>
</footer>
</body>
</html>
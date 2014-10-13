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
		<h1>Development</h1>
	</header>

<div class="container">
<div class="navbar navbar-default">
  <div class="navbar-header">
    <a class="navbar-brand" href="#">Home</a>
    <a class="navbar-brand" href="#">Deactivated projects</a>
  </div>
</div>

<table class="table table-striped table-hover ">
    <thead>
      <tr>
        <th>Company name</th>
        <th>Contact person</th>
        <th>Open projects</th>
        <th>Last contact date</th>
        <th>Balance</th>
        <th>Limit</th>
        <th>Edit</th>
        <th>Deactivate</th>
      </tr>
    </thead>

    <tbody>
        <?php
          $sql = "SELECT * FROM customer";
          $query = mysqli_query($con, $sql);
          

          while ($row = mysqli_fetch_assoc($query)){
            echo '<td>' . $row['customerNR'] . '</td>';
          }
        ?>   
    </tbody>
  </table> 
</div>

<footer>

</footer>
</body>
</html>
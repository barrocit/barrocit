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
      <tbody class="projects">
        <?php 
          $sql = "SELECT * FROM customers";
          $query = mysqli_query($con, $sql);

          while ($row = mysqli_fetch_assoc($query)) {
            echo '<tr>';
            echo '<td><a href="projecten.php?customerNR=' . $row['customerNR'] . '">' . $row['companyName'] . '</a></td>';
            echo '<td><a href="projecten.php?customerNR=' . $row['customerNR'] . '">' . $row['contactPerson'] . '</a></td>';
            echo '<td><a href="projecten.php?customerNR=' . $row['customerNR'] . '">' . $row['openProjects'] . '</a></td>';
            echo '<td><a href="projecten.php?customerNR=' . $row['customerNR'] . '">' . $row['lastcontactDate'] . '</a></td>';
            echo '<td><a href="projecten.php?customerNR=' . $row['customerNR'] . '">' . $row['balance'] . '</a></td>';
            echo '<td><a href="projecten.php?customerNR=' . $row['customerNR'] . '">' . $row['limit'] . '</a></td>';
            echo '</tr>';
            }
          ?>
      </tbody>    
    </tbody>
  </table> 
</div>

<footer>

</footer>
</body>
</html>
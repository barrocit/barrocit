<?php session_start(); 

if (! isset($_SESSION['name']) ) 
{
    header('location: ../error1.php');
}

if ($_SESSION ['gebruikersrol'] !='1' && $_SESSION ['gebruikersrol'] != '4')
{
    header('location: ../error2.php');
}
?>
<?php include "../../config/config.php"; ?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapStyle.css">
	<title>Barroc-IT ~ Finance</title>
</head>

<body>
    <?php
    if( isset($_GET['id']) ) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM projects WHERE customerNR = $id";
    if (!$query = mysqli_query($con, $sql)) {
      echo 'Kan selectie niet uitvoeren.';
      die();
    }
    $row = mysqli_fetch_assoc($query);
    } 
  ?>
	<header>
    
	</header>

<div class="container">

<img src="../images/menuBarrocit.png" width="1140" height= "400px;"/>

<div class="navbar navbar-default">
  <div class="navbar-header">
    <a class="navbar-brand">Finance</a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li><a href="index.php">Index</a></li>
      <li class="active"><a href="#">Projects</a></li>
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

<div class="page-header"><h2>Projects</h2></div>

<table class="table table-striped table-hover ">
    <thead>
      <tr>
        <th>Project NR</th>
        <th>Description</th>
        <th>Software</th>
        <th>Hardware</th>
        <th>See Invoices</th>
      </tr>
    </thead>
    <tbody>
        <?php
          $sql = "SELECT * FROM projects WHERE customerNR = $id";
          $query = mysqli_query($con, $sql);
          

          while ($row = mysqli_fetch_assoc($query)){
            echo '<tr><td>' . $row['projectsNR'] . '</td>';
            echo '<td>' . $row['description'] . '</td>';
            echo '<td>' . $row['software'] . '</td>';
            echo '<td>' . $row['hardware'] . '</td>';
            echo '<td> <a href="invoices.php?id=' . $row['projectsNR'] . '"><img src="http://localhost/GitHub/barrocit/app/development/search.png"></a> </td></tr>';
          }
        ?> 
    </tbody>
  </table> 
</div>
<footer>
</footer>
</body>
</html>
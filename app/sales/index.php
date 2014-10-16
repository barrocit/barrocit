<?php session_start(); ?>
<?php include "../../config/config.php"; ?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrapStyle.css">
	<title>Sales</title>
    <header>
		<h1>Sales</h1>
	</header>
</head>
<body>
<div class="container">
<div class="navbar navbar-default">
  <div class="navbar-header">
    <a class="navbar-brand" href="#">Home</a>
    <a class="navbar-brand" href="#"></a>
  </div>
</div>
  <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <td class="col-sm-2"><strong>companyName</strong></td>
                            <td class="col-sm-3"><strong>address</strong></td>        
                            <td class="col-sm-1"><strong>zipcode</strong></td>
                            <td class="col-sm-2"><strong>residence</strong></td>
                            <td class="col-sm-2"><strong>email</strong></td>        
                            <td class="col-sm-1"><strong>prospect</strong></td>
                            <td class="col-sm-1"><strong>krediet</strong></td>  
                        </tr>
                <?php       
                     $sql = "SELECT * FROM customer";
                     $query = mysqli_query($con, $sql);
          

                     while ($row = mysqli_fetch_assoc($query)){
                     echo '<tr><td>' . $row['companyName'] . '</td>';
                     echo '<td>' . $row['address'] . '</td>';
                     echo '<td>' . $row['zipCode'] . '</td>';
                     echo '<td>' . $row['residence'] . '</td>';
                     echo '<td>' . $row['email'] . '</td>';
                     echo '<td>' . $row['prospect'] . '</td>';
                     echo '<td>' . $row['krediet'] . '</td></tr>';
                }
                ?>
                    </thead>
</div>
</body>
<footer>

</footer>
</body>
</html>
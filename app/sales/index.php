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
  <table class="overzicht_custommers">
                    <thead>
                        <tr>
                            <td class="col-sm-2"><strong>companyName</strong></td>
                            <td class="col-sm-3"><strong>adress1</strong></td>        
                            <td class="col-sm-1"><strong>zipcode1</strong></td>
                            <td class="col-sm-2"><strong>residence1</strong></td>
                            <td class="col-sm-2"><strong>email</strong></td>        
                            <td class="col-sm-1"><strong>prospect</strong></td>
                            <td class="col-sm-1"><strong>creditWorthy</strong></td>
                            <td class="col-sm-1"><strong>action</strong></td>
                        </tr>
                                     <?php
                    while ($row = mysqli_fetch_assoc($query)) 
                    {
                        $id=$row['CustomerNR'];
                        echo '<tr>';
                        echo '<td>' . $row['companyName'] . '</td>';
                        echo '<td>' . $row['adress1'] . '</td>';
                        echo '<td>' . $row['zipcode1'] . '</td>';
                        echo '<td>' . $row['residence1'] . '</td>';
                        echo '<td>' . $row['email'] . '</td>';
                        echo '<td>' . $row['prospect'] . '</td>';
                        echo '<td>' . $row['creditWorthy'] . '</td>';
                        ?>
                        <html>
                        <td>  <a href="view.php?id=<?php echo $id;?>" class="btn btn-info">View</a>
                        <td> <a href="edit.php?id=<?php echo $id;?>" class="btn btn-primary">Edit</a>
                        </html>
                        <?php
                        echo '</tr>';
                    }
                    ?>
                    </thead>
</div>
</body>
<footer>

</footer>
</body>
</html>
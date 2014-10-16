<?php session_start(); ?>
<?php include "../config/config.php"; ?>
<?php $accounts = mysqli_query($con,"SELECT * FROM users"); ?>
<?php 
if ( isset($_GET['id']) )
		{
			echo 'verwijderen';
			$id = $_GET['id'];
			$sql = "DELETE FROM users WHERE id = '$id'";

			if (!$query = mysqli_query($con, $sql)) {
				echo 'delete query is niet goed gegaan';
				die();
			}
			header('location: index.php');
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Barroc-IT | Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
		<div class="top">Barroc-IT</div>
			<div class="div1">
				<h2>Departments</h2>
				- <a href="development">Development</a><br>
				- <a href="sales">Sales</a><br>
				- <a href="finance">Finance</a>
			</div>
			<div class="div2">
				<h2>Invisible Invoices</h2>
			</div>
			<div class="div2">
				<h2>Accounts</h2>
				<table>
  					<thead>
					    <tr>
					      <th width="30" align="left">#</th>
					      <th width="80" align="left">Naam</th>
					      <th width="110" align="left">Rol</th>
					      <th width="25" align="left"></th>
					      <th width="25" align="left"></th>
					    </tr>
					</thead>
					<tbody>
					   	
					     
<?php
				while($row = mysqli_fetch_array($accounts)) {
  				echo '<tr><td>' . $row['id'] . '</td><td>' . $row['name'] . '</td><td>';
  				if( $row['gebruikersrol'] == 4)
  					{
  						echo "Administrator";
  					}
  				if( $row['gebruikersrol'] == 3)
  					{
  						echo "Sales";
  					}
  				if( $row['gebruikersrol'] == 2)
  					{
  						echo "Development";
  					}
  				if( $row['gebruikersrol'] == 1)
  					{
  						echo "Finance";
  					}


  					echo '</td><td>/</td>';
  					echo '<td> <a href="?id=' . $row['id'] .'">X</a>' . '</td>';
}
?>
					</tbody>
				</table> 
			</div>
			<div class="div2">
					<form method="post" action="controllers/usersController.php" role="form">
						<h2>Create User</h2>
					
						<div class="width-tabel"><label for="name">Username*</label></div>
						<input type="name" name="name" id="name" required>	
					
						<div class="width-tabel"><label for="password">Password*</label></div>
						<input type="password" name="password" id="password" required>
					
						<div class="width-tabel"><label for="gebruikersrol">User role*</label></div>
						<select name="gebruikersrol" id="gebruikersrol" required>
							<option value=""></option>
							<option value="4">Administrator</option>
							<option value="2">Development</option>
							<option value="1">Finance</option>
							<option value="3">Sales</option>
						</select>
					
						<div class="width-tabel"></div>
						<input type="submit" value="Create User" name="createUser" id="button">
					</form>
			</div>	
			<?php  
						// succes of fail message
						if (isset($_GET['msg'])) {
						echo '<div class="div2">' .  htmlspecialchars($_GET['msg']) . '</div>';
						}
						?>

</body>
</html>
<?php session_start(); ?>
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
				- Development<br>
				- Sales<br>
				- Finance
			</div>
			<div class="div2">
				<h2>Invisible Invoices</h2>
			</div>
			<div class="div2">
				<h2>Accounts</h2>
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
					
						<input type="submit" value="Create User" name="createUser">
					</form>
			</div>	
			<?php  
						// succes of fail message
						if (isset($_GET['msg'])) {
						echo '<div class="div2">' .  htmlspecialchars($_GET['msg']) . '</div>';
						}
						?>
	<div class="footer">&copy; Barroc-IT 2014</div>	
</body>
</html>
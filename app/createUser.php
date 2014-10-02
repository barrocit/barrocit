<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Barroc-IT | Create User</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<div class="top">Barroc-IT</div>
			<div class="div1">
				<p>You are not logged in.</p>
					<form method="post" action="controllers/usersController.php" role="form">
						<h2>Create User</h2>
						<ul>
						<?php  
						// succes of fail message
						if (isset($_GET['msg'])) {
						echo '<li>' .  htmlspecialchars($_GET['msg']) . '</li>';
						}
						?>
						</ul>

						<div class="width-tabel"><label for="voornaam">First name*</label></div>
						<input type="voornaam" name="voornaam" id="voornaam" required>	
					
						<div class="width-tabel"><label for="tussenvoegsel">Middle name</label></div>
						<input type="tussenvoegsel" name="tussenvoegsel" id="tussenvoegsel">	
					
						<div class="width-tabel"><label for="achternaam">Last name*</label></div>
						<input type="achternaam" name="achternaam" id="achternaam" required>	
					
						<div class="width-tabel"><label for="username">Username*</label></div>
						<input type="username" name="username" id="username" required>	
					
						<div class="width-tabel"><label for="email">Email*</label></div>
						<input type="email" name="email" id="email" required>	
					
						<div class="width-tabel"><label for="password">Password*</label></div>
						<input type="password" name="password" id="password" required>
					
						<div class="width-tabel"><label for="rol">User role*</label></div>
						<select name="rol" id="rol" required>
							<option value=""></option>
							<option value="1">Administrator</option>
							<option value="2">Development</option>
							<option value="3">Finance</option>
							<option value="4">Sales</option>
						</select>
					
						<input type="submit" value="Create User" name="createUser">
					</form>
			</div>	
	<div class="footer">&copy; Barroc-IT 2014</div>	
</body>
</html>
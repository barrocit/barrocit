<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Series | Login en sessies</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<div class="top">Barroc-IT</div>
			<div class="login">
					<p>Hier mag je alleen komen als je ingelogd bent.</p>

	<form method="post" action="controllers/usersController.php" role="form">
		
		<h2>Creëer gebruiker</h2>
			
			<ul>
			<?php  
			// succes of fail message
			if (isset($_GET['msg'])) {
				echo '<li>' .  htmlspecialchars($_GET['msg']) . '</li>';
			}
			?>
			</ul>

			
				<label for="voornaam">Voornaam</label>
				<input type="voornaam" name="voornaam" id="voornaam" class="form-control">	
			
				<label for="tussenvoegsel">Tussenvoegsel</label>
				<input type="tussenvoegsel" name="tussenvoegsel" id="tussenvoegsel" class="form-control">	
			
				<label for="achternaam">Achternaam</label>
				<input type="achternaam" name="achternaam" id="achternaam" class="form-control">	
			
				<label for="username">Username</label>
				<input type="username" name="username" id="username" class="form-control">	
			
				<label for="email">Email</label>
				<input type="email" name="email" id="email" class="form-control">	
			
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control">
			
				<label for="rol">Gebruikersrol</label>
				<select name="rol" id="rol" class="form-control">
					<option value=""></option>
					<option value="1">Financiën</option>
					<option value="2">Research & Development</option>
					<option value="3">Human Resources</option>
					<option value="4">IT</option>
					<option value="5">Administrator</option>
				</select>
			
			
				<input type="submit" value="Maak gebruiker aan" name="createUser" class="btn btn-large">
			
		
	</form>
			</div>
		</div>	
	<div class="footer">&copy; Barroc-IT 2014</div>	
</body>
</html>
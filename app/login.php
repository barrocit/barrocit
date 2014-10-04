<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Barroc-IT | Inloggen</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<div class="top">Barroc-IT</div>
			<div class="div1">
				<form method="post" action="controllers/authController.php" role="form">
					<h2>Inloggen</h2>

					<ul>
					<?php  
					// succes of fail message
					if (isset($_GET['msg'])) {
					echo '<li>' .  htmlspecialchars($_GET['msg']) . '</li>';
					}
					?>
					</ul>
					
					<div class="width-tabel"><label for="email">Email</label></div>
					<input type="email" name="email" id="email" class="form-control">
				
					<div class="width-tabel"><label for="password">Password</label></div>
					<input type="password" name="password" id="password" class="form-control">

					<input type="submit" name="authUser" value="Login" class="btn btn-large">
				</form>
			</div>
		</div>	
	<div class="footer">&copy; Barroc-IT 2014</div>	
</body>
</html>
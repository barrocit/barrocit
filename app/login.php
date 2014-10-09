<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Barroc-IT | Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<div class="top">Barroc-IT</div>
			<div class="login">
				<form method="post" action="controllers/authController.php" role="form">
					<h2>Login</h2>
					
					<div class="width-tabel"><label for="email">Username</label></div>
					<input type="name" name="name" id="name" class="form-control">
				
					<div class="width-tabel"><label for="password">Password</label></div>
					<input type="password" name="password" id="password" class="form-control">
					
					<div class="width-tabel"></div>
					<input type="submit" name="authUser" value="Enter" class="btn btn-large">
				</form>
			</div>
		<?php  
		// succes of fail message
		if (isset($_GET['msg'])) {
		echo '<div class="message">' . htmlspecialchars($_GET['msg']) . '</div>' ;
		}
		?>
	<div class="footer">&copy; Barroc-IT 2014</div>	
</body>
</html>
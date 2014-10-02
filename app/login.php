<?php require 'templates/header.php'; ?>
	<div class="top">Barroc-IT</div>
		<div class="login">
			<form method="post" action="controllers/authController.php" role="form" class="login-form col-md-4 col-md-offset-4">
				<h2>Inloggen</h2>
				<ul>
					<?php  
					// succes of fail message
					if (isset($_GET['msg'])) {
					echo '<li>' .  htmlspecialchars($_GET['msg']) . '</li>';
					}
					?>
				</ul>

				<div class="form-group">
					<div class="loginpadding"><label for="email">Email</label></div>
					<input type="email" name="email" id="email" class="form-control">
				</div>
				<div class="form-group">
					<div class="loginpadding"><label for="password">Password</label></div>
					<input type="password" name="password" id="password" class="form-control">
				</div>
				<div class="form-group">
					<input type="submit" name="authUser" value="Login" class="btn btn-large">
				</div>
			</form>
		</div>
	</div>	
<div class="footer">copy</div>	
<?php require 'templates/footer.php'; ?>
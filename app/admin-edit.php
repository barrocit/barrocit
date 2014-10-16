<?php session_start(); ?>
<?php include "../config/config.php"; ?>
<?php $accounts = mysqli_query($con,"SELECT * FROM users"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Barroc-IT | Account Bewerken</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="top">Barroc-IT</div>
		<div class="div1">
			<h2>Account bewerken</h2>
		</div>
		<div class="div2">
			melding
		</div>
	</div>
</body>
</html>
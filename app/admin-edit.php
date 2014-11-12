<?php session_start(); 

if (! isset($_SESSION['name']) ) 
{
    header('location: error1.php');
}

if ($_SESSION ['gebruikersrol'] !='4')
{
    header('location: error2.php');
}?>
<?php include "../config/config.php"; ?>
<?php
	if( isset($_GET['id']) ) {
		$id = $_GET['id'];
		$sql = "SELECT * FROM users WHERE id = '$id'";
		if (!$query = mysqli_query($con, $sql)) {
			echo 'Kan selectie niet uitvoeren.';
			die();
		}

		$row = mysqli_fetch_assoc($query);

	} else {
		header('location: index.php');
	}	

	if ( isset($_POST['submit']) ) {
		$name = mysqli_real_escape_string($con, $_POST['name']);
		$gebruikersrol = mysqli_real_escape_string($con, $_POST['gebruikersrol']);

		$sql = "UPDATE users SET name = '$name', gebruikersrol = '$gebruikersrol' WHERE id = '$id'";

	if	(!$query = mysqli_query($con, $sql)) {
			echo 'Kan geen update uitvoeren.';
			die();
		}
		$msg = urlencode('Account is succesvol bewerkt.');
		header('location: index.php?msg=' . $msg);
	}
?>
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
			<form action="" method="POST">
				<div class="width-tabel"><label for="name">Name:</label></div>
				<input type="text" name="name" id="name" value="<?php echo $row['name']; ?>">
				<div class="width-tabel"><label for="gebruikersrol">User Role:</label></div>
				<select name="gebruikersrol" id="gebruikersrol" value="<?php echo $row['gebruikersrol']; ?>">
					<option value="4">Administrator</option>
					<option value="2">Development</option>
					<option value="1">Finance</option>
					<option value="3">Sales</option>
				</select>
				<div class="width-tabel"></div>
				<input name="submit" type="submit" value="Update User" id="button">
			</form>
		</div>
	</div>
</body>
</html>
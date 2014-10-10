<?php

	if ( isset($_GET['projectsNR']) ) {
		
		$projectsNR = $_GET['projectsNR'];
		$sql = "SELECT * FROM projects";

		if (!$query = mysqli_query($con, $sql)) {
			echo '<a href="index.php"><button class="blue-btn2" style="font-size: 20px; height: 100px; width: 350px; float: left; margin-top: 10px; margin-left: 35%;">Kan selectie niet uitvoeren,<br>Klik hier om terug te gaan.</button></a>';
			die();
			}
		$row = mysqli_fetch_assoc($query);
		}

?>

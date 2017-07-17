<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="author" content="Mein Name" />
		<!-- Das neueste kompilierte und minimierte CSS -->
	   <link rel="StyleSheet" href="css/main.css" type="text/css" media="screen">
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	   <style>pre{width: 600px}</style>
	   <title>Gastroguide</title>
	</head>
	<body>
		<?php
			include('tools/connect.php');
			include('tools/DBTools.php');
			$datenbank = new DBTools($dbm);
			if ($_GET) {
				echo '<div class="container">';
				include('includes/header.php');
				include('includes/navbar.php');

				if ($_GET['x'] == "start") {
					include ('pages/start.php');
				}
				include('includes/footer.php');
				echo "</div>";
			} else {
				include ('pages/start.php');
			}

		$dbm->close();
		?>
	</body>
</html>

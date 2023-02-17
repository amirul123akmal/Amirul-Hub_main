<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Amirul Hub</title>
	
	<link rel="icon" href="image/amirulHubIcon.png">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	
</head>
<body>
	<div class="header">
		<table class="nav">
			<tr>
			<?php
				$name = ["HOME", "DOWNLOADS", "SEM 4"];
				$files = ["index.php", "indexDownload.php", "semFour.php"];
				for ($i=0; $i < sizeof($name); $i++) 
					echo "<td><a href='".$files[$i]."'>".$name[$i]."</a></td>";
			?>	
			</tr>
		</table>

		<table class="login">
			<tr>
				<?php
				$name = ["LOGIN", "REGISTERS"];
				$files = ["login.php", "register.php"];
				for ($i=0; $i < sizeof($name); $i++) 
					echo "<td><a href='".$files[$i]."'>".$name[$i]."</a></td>";
				?>	
			</tr>
		</table>
	</div>
</body>
</html>
			
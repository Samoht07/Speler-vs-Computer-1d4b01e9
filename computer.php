<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="steen.css">
	<title>Steen, Papier, Schaar</title>
</head>
<body>
        <h1>Steentje en Paper Sciscor</h1>
		<h2>(mindere) Speler 1</h2>
		<?php
		echo "<form method='get' action='end2.php'>
		<select name='drop'>
		<option>Steen</option>
		<option>Papier</option>
		<option>Schaar</option>
		</select>
		<input type='submit' value='submit' name='submit'></form>";
			if (isset($_GET["submit"])) {
				$p1c = $_GET["drop"];
			}
		?>
		
</body>
</html>
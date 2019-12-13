<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="steen.css">
	<title>Steen, Papier, Schaar</title>
</head>
<body>
		<h1>STEEN EN EEN PAPIER EN EEN SCHAAR</h1>
		<h2>(mindere) Speler 1</h2>
		<?php
		$dis = "";
		if(isset($_GET["submit"]))
			$dis = "display: none;";
		echo "<form method='get' style='" . $dis
		. "'><select name='drop'><option>Steen</option><option>Papier</option><option>Schaar</option></select><input type='submit' value='submit' name='submit'></form>";
			if (isset($_GET["submit"])) {
				$p1c = $_GET["drop"];
			}
		?>
		<h2>(betere) Speler 2</h2>
		<?php
		$dis = "";
		if(!isset($_GET["submit"]) || !isset($p1c))
			$dis = "display: none;";
		echo "<form method='get' action='end.php' style='" . $dis
		. "'><input name='p1c' type='hidden' value=" . $p1c . "><select name='p2c'><option>Steen</option><option>Papier</option><option>Schaar</option></select><input type='submit' value='submit' name='submit'>";
		echo "</form>";
		?>
	
</body>
</html>
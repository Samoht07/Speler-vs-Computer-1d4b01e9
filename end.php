<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="steen.css">
    <title>rock</title>
</head>
<body>
    <h1>STEEN EN EEN PAPIER EN EEN SCHAAR</h1>
    <hr>
    <?php
        $speler1 = $_GET["p1c"];
        $speler2 = $_GET["p2c"];
        echo "<h1>Speler 1 koos " . $speler1 . ".</h1>";
        echo "<h1>Speler 2 koos " . $speler2 . ".</h1>";
        if ($speler1 == "Steen") {
            if ($speler2 == "Steen") {
                echo "Gelijk gespeeld FUCKING SAAI A NIFFO";
            }
            if ($speler2 == "Papier") {
                echo "Speler 2 wint, HIJ IS BETER DAN JOU LMAO";
            }
            if ($speler2 == "Schaar") {
                echo "Speler 1 wint, had je speler 2 niet even kunnen laten winnen?";
            }
        }
        if ($speler1 == "Papier") {
            if ($speler2 == "Steen") {
                echo "Speler 1 wint, goed gedaan hoor je mam is wel trots hoor";
            }
            if ($speler2 == "Papier") {
                echo "Gelijkspel en nu VECHTEN tot de DOOD";
            }
            if ($speler2 == "Schaar") {
                echo "Speler 2 wint, krijgt een taart (the cake is not a lie)";
            }
        }
        if ($speler1 == "Schaar") {
            if ($speler2 == "Steen") {
                echo "Speler 2 wint, het systeem is trots op je ";
            }
            if ($speler2 == "Papier") {
                echo "Speler 1 wint, bok op speler 1";
            }
            if ($speler2 == "Schaar") {
                echo "Gelijkspel reallllllllyyyyyyyyyyyyyyyyyy?";
            }
        }
    ?>
    
</body>
</html>
<?php

$awal = ["Indonesia","Singapura","Malaysia","Brunei","Thailand"];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan 4b </title>
</head>
<body>
	<h1>Daftar Negara ASEAN Awal :</h1>
        <?php
        for ($i = 0; $i < count($awal); $i++) {
            echo "<li>$awal[$i]</li>";
        }
        ?>
    <h1>Daftar Negara ASEAN Baru :</h1>
        <?php
        $asean = array_push($awal,"Laos","Filipina","Myanmar");
        foreach ($awal as $asean) {
            echo "<li>$asean</li>";
        }
        ?>
</body>
</html>
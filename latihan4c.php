<?php

$asean = [
        "Indonesia" => "D.K.I. Jakarta",
        "Singapura" => "Singapura",
        "Malaysia" => "Kuala Lumpur",
        "Brunei" => "Bandar Seri Begawan",
        "Thailand" => "Bangkok",
        "Laos" => "Vientiane",
        "Filipina" => "Manila",
        "Myanmar" => "Naypyidaw"
        ];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan 4c </title>
</head>
<body>
    <h1>Daftar Negara ASEAN dan Ibukota :</h1>
        <?php
        foreach ($asean as $hasil => $kota) :
        ?>
        <li><?php echo "$hasil : $kota" ?></li>
        <?php endforeach ?>
</body>
</html>
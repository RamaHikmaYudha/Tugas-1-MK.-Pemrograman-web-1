<?php 


$aseans = [
    [
        'Negara' => 'Indonesia',
        'Ibukota' => 'D.K.I. Jakarta',
        'Kode_telepon' => '+62',
    ],
    [
        'Negara' => 'Singapura',
        'Ibukota' => 'Singapura',
        'Kode_telepon' => '+65',
    ],
    [
        'Negara' => 'Malaysia',
        'Ibukota' => 'Kuala Lumpur',
        'Kode_telepon' => '+60',
    ],
    [
        'Negara' => 'Brunei',
        'Ibukota' => 'Bandar Seri Begawan',
        'Kode_telepon' => '+673',
    ],
    [
        'Negara' => 'Thailand',
        'Ibukota' => 'Bangkok',
        'Kode_telepon' => '+66',
    ],
    [
        'Negara' => 'Laos',
        'Ibukota' => 'Vientiane',
        'Kode_telepon' => '+856',
    ],
    [
        'Negara' => 'Filipina',
        'Ibukota' => 'Manila',
        'Kode_telepon' => '+63',
    ],
    [
        'Negara' => 'Myanmar',
        'Ibukota' => 'Naypyidaw',
        'Kode_telepon' => '+95',
    ]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan 4d </title>
</head>
<body>
<table border="1">
    <tr>
        <th style="background-color: red">No</th>
        <th style="background-color: yellow">Negara</th>
        <th style="background-color: green">Ibukota</th>
        <th style="background-color: blue">Kode Telepon</th>
    </tr>
<?php
$no = 1;
foreach($aseans as $asean){
    echo "<tr>";
    echo "<td>".$no."</td>
        <td>".$asean['Negara']."</td>
        <td>".$asean['Ibukota']."</td>
        <td>".$asean['Kode_telepon']."</td>";
    echo "</tr>";
    $no++;
}
?>
</table>
</body>
</html>
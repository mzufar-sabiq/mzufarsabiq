<?php
$i =  1;

$siswa = [
        [ "Joni Susanto",
          "XII TKR 2",
          "Pemalang" ],
        [ "Intan Ayu",
          "XII TB 1",
          "Brebes" ],
        [ "Salma Karima",
          "XI RPL 3",
          "Batang" ]
    ];
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 4b</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
           <th>No.</th>
           <th>Nama</th>
           <th>Kelas</th>
           <th>Alamat</th>
        </tr>
        <?php foreach( $siswa as $s ) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $s[0];?></td>
                <td><?= $s[1];?></td>
                <td><?= $s[2];?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
<?php
$merek_hp = "infinix";

if ($merek_hp == "xiaomi") {
    $harganya = "1.000.000";
} else if  ($merek_hp == "infinix") {
    $harganya = "3.000.000"; 
} else if ($merek_hp == "oppo") {
    $harganya = "4.000.000"; 
} else if ($merek_hp == "vivo") {
    $harganya = "5.000.000"; 
} else if ($merek_hp == "iphone") {
    $harganya = "14.000.000";
} else if ($merek_hp == "asus rog phone") {
    $harganya = "7.000.000";
} 
 
echo ("harga hp ".$merek_hp." adalah ".$harganya);
?>

<br><br><br>

<?php
$a = 1;

$siswa = [
    ["Zufar",
     "XI RPL 1",
     "Pekalongan"],
    ["Ajir",
     "XI TBSM 1",
     "Pemalang"],
    ["Thoriq",
     "XI TKR 1",
     "Wiradesa"],
    ["Najah",
     "XI TKJ 4",
     "Paninggaran"]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>
        <?php foreach ( $siswa as $s ) : ?>
            <tr>
                <td><?=$a++?></td>
                <td><?=$s[0];?></td>
                <td><?=$s[1];?></td>
                <td><?=$s[2];?></td>
            </tr>
        <?php endforeach ; ?>
    </table>
</body>
</html>

<br><br><br>

<?php 
for($a=1; $a<=10; $a++) {
for($b=1; $b<=$a; $b++) {
echo '*';
}
echo "<br>";
}

?>
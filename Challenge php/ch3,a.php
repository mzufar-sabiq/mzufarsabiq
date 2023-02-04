<?php
function nama ($nama) { 
    return "Nama saya $nama,";
}
function kelas ($kelas) {
    return "Kelas $kelas,";
}
function alamat ($alamat) {
    return "Alamat $alamat";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>challenge 3</title>
</head>
<body>
    <h1>
        <?php 
        echo nama ("M.Zufar Sabiq"); 
        echo kelas ("X RPL 3");
        echo alamat ("Medono, Pekalongan");
        ?>
    </h1>
</body>
</html>


<br><br><br><br><br>
<h1>yang lebih simpel</h1>

<?php
function perkenalan ($nama, $kelas, $alamat) { 
    return "Nama saya $nama, Kelas $kelas, Alamat $alamat";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ch3</title>
</head>
<body>
    <h1><?= perkenalan ("M.Zufar Sabiq", "XI RPL 1", "Medono, Pekalongan");?></h1>
</body>
</html>
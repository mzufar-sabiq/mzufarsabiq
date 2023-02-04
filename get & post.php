<!-- <?php
// $x = 10;

// function tampilx() {
//     global $x;
//     echo $x;
// }
// tampilx();
// echo "<br>";
// echo $x; 
?>

<?php
var_dump($_GET);
?> -->


<?php
 $siswa = [
    [
    "nama" => "M.Zufar Sabiq",
    "kelas" => "XI",
    "jurusan" => "PPLG 1",
    "nis" => "21,5973"
    ],
 [
    "nama" => "Achmad Nuril Anwar",
    "kelas" => "XII",
    "jurusan" => "PPLG 3",
    "nis" => "21,5071"
 ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lat get&post</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <ul>
    <?php foreach ( $siswa as $sw ) : ?>
            <li>
               <a href="get & post2.php?nama=<?= $sw["nama"] ;?>&kelas=<?= $sw["kelas"] ;?>&jurusan=<?= $sw["jurusan"] ;?>&nis=<?= $sw["nis"] ;?>"><?= $sw["nama"] ;?></a>
            </li>
    <?php endforeach; ?>
     </ul>
</body>
</html>
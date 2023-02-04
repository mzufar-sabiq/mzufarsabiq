<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
    <style>
        body {
            height: 800px;
        }
        .kotak {
            width: 100px;
            height: 100px;
            color: blue;
            background-color: gold;
            font-size: 50px;
            text-align: center;
            line-height: 100px;
            transition: 1s;        
            float: left;
            margin: 3px;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
    </style>
</head>
<body>

<?php
$angka = [1,2,3,4,5,6,7,8,9];
?>

<?php foreach( $angka as $a ) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?> 


</body>
</html>
 -->


 <?php
 $siswa = [
    [
    "nama" => "M.Zufar Sabiq",
    "kelas" => "XI",
    "jurusan" => "PPLG 1"
    ],
 [
    "nama" => "Achmad Nuril Anwar",
    "kelas" => "XI",
    "jurusan" => "PPLG 1",
    "tugas" => [80, 90, 100]
 ],
];

 echo $siswa[1]["tugas"][1];
 ?>
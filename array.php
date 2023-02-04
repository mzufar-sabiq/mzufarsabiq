<?php
$hari = array ("senin", "selasa", "rabu");
$bulan = ["januari", "februari", "maret"];
$arr1 = [123, "tulisan", false];

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

echo $arr1[0];
echo "<br>";
echo $bulan[2];
echo "<br>";

var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
$hari[] = "sabtu";
echo "<br>";
var_dump($hari);
?>

<br><br><br>

<?php
// pengulangan pada array
// for / foreach

$angka = [2,3,6,9,14,17,28,33,45,];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lat array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: lightskyblue;
            line height: 50px;
            margin: 3px;
            float: left;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php for ($i = 0; $i < count ($angka); $i++ ) { ?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach ($angka as $a) { ?>
    <div class="kotak"><?php echo $a; ?></div>
    <?php } ?>
</body>
</html>
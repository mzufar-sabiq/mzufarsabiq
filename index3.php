<?php
$nama_depan = "M.ZUFAR";
$nama_belakang = "SABIQ";
echo $nama_depan . " " . $nama_belakang;
?>

<br><br>

<?php
$x = 1;
$x -= 5;
echo $x;
?>

<br><br>

<?php
$i =  10;
if( $i < 20 ) {
    echo "benar";
} else {
    echo "salah";
}
?>

<br><br>

<?php
for ($i = 15; $i <= 56; $i++){
    echo "$i";
}
?>

<br><br>

<?php
$bintang=10;

for($a = 1; $a<=$bintang; $a++) {
for($b=$bintang; $b>=$a; $b-=1) {
echo "*";
}
echo "<br>";
}
?>

<br><br>

<?php
for($a=1; $a<=10; $a++) {
for($b=1; $b<=$a; $b++) {
echo "*";
}
echo "<br>";
}
?>

<br><br>

<?php
for($i=4; $i < 80; $i+=4){
echo "$i <br>";
}
?>

<br><br>

<?php
$nama_hewanqurban = array ("Sapi","Kerbau","Kambing","Domba","unta");

echo $nama_hewanqurban[1];
echo "<br>";
echo $nama_hewanqurban[0] ." dan ". $nama_hewanqurban[4];
?>

<br><br>

<?php
echo date ("l, d-M-Y");
echo "<br>";
echo date('d M Y', strtotime ('2022-11-22'));
?>


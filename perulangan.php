<?php
	//perulangan
		for ($i= 4; $i <20; $i=$i+2) { 
				echo "$i <br>";
			}


?>
<br><br>

<?php
//echo time ()
echo date ( "l, d M Y", time ()-60*60*24*6000)
?>

<br><br>

<?php
$i=50;
$e=5;
echo $i / $e;
?>

<br><br>

<?php
function perkenalan ($nama, $kelas, $alamat) { 
    return "Nama saya $nama, Kelas $kelas, Alamat $alamat   ";
}	
?>
<?= perkenalan("m.zufar sabiq", "xii rpl 1", "pekalongan"); ?>
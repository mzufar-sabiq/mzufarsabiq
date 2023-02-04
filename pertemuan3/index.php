<?php
//koneksi ke Database
$conn = mysqli_connect("localhost", "root", "", "db_siswa");

//ambil data dari tabel db_hokage/ query data db_hokage
$result = mysqli_query($conn, "SELECT * FROM db_hokage");

//ambil data (fetch) db_hokage dari object result
//mysqli_fetch_row()  // mengembalikan array numerik
//mysqli_fetch_assoc()  // mengembalikan array associative
//mysqli_fetch_array()  // mangembalikan keduanya
//mysqli_fetch_object()  // mengembalikan 

// while ( $hkg = mysqli_fetch_assoc($result) ) {
// var_dump($hkg);
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data hkg</title>
</head>
<body>
    <h1>Daftar Hokage Konoha</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Gambar</th>
            <th>NIP</th>
            <th>Email</th>
            <th>Hokage ke</th>
        </tr>

        <?php while ($anm = mysqli_fetch_assoc($result) ) : ?>
        <tr>
            <td><?= $anm["No."]; ?></td>
            <td>
                <a href="">ubah</a>  |
                <a href="">hapus</a>
            </td>
            <td>
                <img src="gmbr hokage/<?= $anm["Gambar"]; ?>"  width="100" height="50">
            </td>
            <td><?= $anm["NIP"]; ?></td>
            <td><?= $anm["Email"]; ?></td>
            <td><?= $anm["Hokage ke"]; ?></td>
        </tr>
        <?php endwhile ;?>

    </table>
</body>
</html>
<?php

require 'functions.php';

// ambil data dari tabel buku / query data
$siswa = query( "SELECT * FROM buku");

// Tombol di tekan
if(isset($_POST["cari"])){
    $siswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <div class="bungkus">
        <div class="cari">
            <form action="" method="post">
                <input type="text" name="keyword" size="40" placeholder="Masukan pencarian..." autofocus autocomplete="off"> 
                <button type="submit" name="cari"  > Cari! </button>
            </form>
        </div>
    </div>
    
    <br>
    <div class="bungkus">
    <div class="bg" >
    <a href="tambah.php">Tambah data siswa</a><br><br>
    <div class="tb">
    <table  cellpadding="10" cellspacing="0" >
        <tr>
              <td>NO.</td>
              <td>Aksi</td>
              <td>NIS</td>
              <td>Nama Lengkap</td>
              <td>Jenis kelamin</td>
              <td>Alamat</td>
              <td>Id jurusan</td>
              <td>Jurusan</td>
        </tr>

        <?php $no = 1; ?>
        <?php foreach ( $siswa as $row ) : ?>
        <tr>
            <td> <?= $no;  ?></td>
            <td>
                <a href="ubah.php?id_siswa=<?= $row["id_siswa"]; ?>">Ubah</a> |
                <a href="hapus.php?id_siswa=<?= $row["id_siswa"]; ?>">hapus</a>
            </td>
            <td> <?= $row["nis"];  ?> </td>
            <td><?= $row["nama_siswa"];  ?></td>
            <td><?= $row["jenis_kelamin"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
            <td><?= $row["id_jurusan"]; ?></td>
            <td><?= $row["nama_jurusan"]; ?></td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </table>
    </div>
    </div>

    </div>
</body>
</html>
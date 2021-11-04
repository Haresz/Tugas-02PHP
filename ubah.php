<!DOCTYPE html>
<!-- conect db -->
<?php
require 'functions.php';

// ambil data di URL
$id_siswa = $_GET["id_siswa"];

// query data mahasiswa berdasarkan id_siswa
$mhs = query("SELECT * FROM buku WHERE id_siswa = $id_siswa" )[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			</script>
		";
	}


}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Ubah data mahasiswa</title>
	<style>
    .tbtbm table,tr,td{
        border: none;
        color: white;
        font-family: 'Abel', sans-serif;
    }
    .tbtbm table{
        border: none;
        margin: 30px;
    }
    .tbtm button{
        background-color: white;
    }
    .bungkus .bg{
        background-color:none;
        padding: 50px;
    }
    </style>
</head>
<body>
	<h1>Ubah data mahasiswa</h1>
	<div class="bungkus">
		<div class="tb">
		<form action="" method="post">
		<input type="hidden" name="id_siswa" value="<?= $mhs["id_siswa"]; ?>">
		<table class="tbtbm" >
			<tr>
				<td><label for="nis">Nis</td>
				<td>: </label></td>
				<td><input type="text" name="nis" id="nis" required value="<?= $mhs["nis"]; ?>"></td>
			</tr>
			<tr>
				<td><label for="nama_siswa">Nama </td>
				<td>: </label></td>
				<td><input type="text" name="nama_siswa" id="nama_siswa" value="<?= $mhs["nama_siswa"]; ?>"></td>
			</tr>
			<tr>
				<td><label for="jenis_kelamin">Jenis Kelamin</td>
				<td>:</label></td>
				<td><input type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?= $mhs["jenis_kelamin"]; ?>"></td>
			</tr>
			<tr>
				<td><label for="alamat">Alamat</td>
				<td>:</label></td>
				<td><input type="text" name="alamat" id="alamat" value="<?= $mhs["alamat"]; ?>"></td>
			</tr>
			<tr>
				<td><label for="id_jurusan">ID Jurusan</td>
				<td>:</label></td>
				<td><input type="text" name="id_jurusan" id="id_jurusan" value="<?= $mhs["id_jurusan"]; ?>"></td>
			</tr>
			<tr>
				<td><label for="nama_jurusan">Nama Jurusan</td>
				<td>:</label></td>
				<td><input type="text" name="nama_jurusan" id="nama_jurusan" value="<?= $mhs["nama_jurusan"]; ?>"></td>
			</tr>
		</table>
		<button type="submit" name="submit">Ubah Data!</button>


	</form>
		</div>
	</div>
	




</body>
</html>
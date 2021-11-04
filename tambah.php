
<!-- conect db -->

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Tambah Siswa</title>
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
    <h1>Tambah Data Siswa</h1>

    <div class="bungkus">
        <div class="tb">
            <form action="" method="post" >
            <table class="tbtbm">
            <tr>
                <td><label for="nis"  >Nis</td>
                <td>: </label></td>
                <td><input type="text" name="nis" id="nis" ></td>
            </tr>
            <tr>
                <td><label for="nama_siswa"  >Nama</td>
                <td>: </label></td>
                <td><input type="text" name="nama_siswa" id="nama_siswa" ></td>
            </tr>
            <tr>
                <td><label for="jenis_kelamin"  >Jenis kelamin</td>
                <td> : </label></td>
                <td><input type="text" name="jenis_kelamin" id="jenis_kelamin" ></td>
            </tr>
            <tr>
                <td><label for="alamat"  >Alamat</td>
                <td>: </label></td>
                <td><input type="text" name="alamat" id="alamat" ></td>
            </tr>
            <tr>
                <td><label for="id_jurusan"  >ID Jurusan</td>
                <td>: </label></td>
                <td><input type="text" name="id_jurusan" id="id_jurusan" ></td>
            </tr>
            <tr>
                <td><label for="nama_jurusan"  >Jurusan</td>
                <td>: </label></td>
                <td><input type="text" name="nama_jurusan" id="nama_jurusan" ></td>
            </tr>
            </table><br>
        <button type="submit" name="submit" >Tambah Data</button>
    </form>
        </div>
    </div>
</body>
</html>
<?php
 require 'functions.php';

if( isset($_POST["submit"]) ) {
	cek();
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}


}

?>
 <?php 
// koneksi kedatabase

$conn = mysqli_connect("localhost", "root", "", "db_buku");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
	global $conn;

	$nis = htmlspecialchars($data["nis"]);
	$nama_siswa = htmlspecialchars($data["nama_siswa"]);
	$jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$id_jurusan = htmlspecialchars($data["id_jurusan"]);
	$nama_jurusan = htmlspecialchars($data["nama_jurusan"]);

	$query = "INSERT INTO buku
				VALUES
			  ( '', '$nis', '$nama_siswa', '$jenis_kelamin', '$alamat', '$id_jurusan', '$nama_jurusan' )
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function hapus($id_siswa){
    global $conn;
    mysqli_query($conn, "DELETE FROM buku WHERE id_siswa = $id_siswa");
    return mysqli_affected_rows($conn);

}

function ubah($data) {
	global $conn;

	$id_siswa = $data["id_siswa"];
	$nis = htmlspecialchars($data["nis"]);
	$nama_siswa = htmlspecialchars($data["nama_siswa"]);
	$jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$id_jurusan = htmlspecialchars($data["id_jurusan"]);
	$nama_jurusan = htmlspecialchars($data["nama_jurusan"]);

	$query = "UPDATE buku SET
				nis = '$nis',
				nama_siswa = '$nama_siswa',
				jenis_kelamin = '$jenis_kelamin',
				alamat = '$alamat',
				id_jurusan = '$id_jurusan',
				nama_jurusan = '$nama_jurusan'
			  WHERE id_siswa = '$id_siswa'
			";
	// var_dump($query); die;
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}

function cari($keyword){
    $query = "SELECT * FROM buku 
                WHERE 
            nama_siswa LIKE '%$keyword%'OR
            nis LIKE '%$keyword%'OR
            jenis_kelamin LIKE '%$keyword%' OR
            alamat LIKE '%$keyword%'OR
            id_jurusan LIKE '%$keyword%'OR
            nama_jurusan LIKE '%$keyword%'
            ";
    return query($query);
}




?>
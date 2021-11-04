<?php

require 'functions.php';

$id_siswa = $_GET["id_siswa"];

if(hapus($id_siswa)>0) {
    echo "
        <script>
            alert('data berhasil dihapus!')
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo"
        <script>
            alert('data gagal dihapus!')
        </script>
    ";
}

?> 
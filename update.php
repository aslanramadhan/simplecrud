<?php

    require_once 'koneksi.php';

    if(isset($_GET['nama']) && isset($_GET['stambuk']) && isset($_GET['jk'])) {
        $nama = $_GET['nama'];
        $stambuk = $_GET['stambuk'];
        $jk = $_GET['jk'];

        $sql = "UPDATE mahasiswa SET nama = '$nama', jenis_kelamin = '$jk' WHERE stambuk = '$stambuk'";
        if($koneksi->query($sql)) {
            echo "Update Sukses !";
            echo "<br><a href='select.php'>Kembali</a>";
        } else {
            echo "Update Gagal !";
            echo "<br><a href='input.php'>Kembali</a>";
        }
    } else {
        echo "Ada Data Yang Kosong!";
    }

?>
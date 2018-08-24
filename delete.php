<?php

    require_once 'koneksi.php';

    if(isset($_GET['stambuk'])) {
        $stambuk = $_GET['stambuk'];

        $sql = "DELETE FROM mahasiswa WHERE stambuk = '$stambuk'";

        if($koneksi->query($sql)) {
            echo "Delete Sukses !";
            echo "<br><a href='select.php'>Kembali</a>";
        } else {
            echo "Delete Gagal !";
            echo "<br><a href='select.php'>Kembali</a>";
        }
    } else {
        echo "Data Tidak Ditemukan!";
        echo "<br><a href='select.php'>Kembali</a>";
    }
?>
<?php

    require_once 'koneksi.php';

    if(isset($_POST['nama']) && isset($_POST['stambuk']) && isset($_POST['jk'])) {
        $nama = $_POST['nama'];
        $stambuk = $_POST['stambuk'];
        $jk = $_POST['jk'];

        $sql = "INSERT INTO mahasiswa VALUES ('$stambuk','$nama','$jk')";
        if($koneksi->query($sql)) {
            echo "Insert Sukses !";
            echo "<br><a href='select.php'>Kembali</a>";
        } else {
            echo "Insert Gagal !";
            echo "<br><a href='input.php'>Kembali</a>";
        }
    } else {
        echo "Ada Data Yang Kosong!";
    }

?>
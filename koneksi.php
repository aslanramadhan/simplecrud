<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbnm = '13020150111';

    $koneksi = new mysqli($host,$user,$pass,$dbnm);

    if($koneksi->connect_errno){
        echo "Gagal!";
    }

?>
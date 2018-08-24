<?php
    require_once 'koneksi.php';
    
    if(isset($_GET['stambuk'])) {
        $stambuk = $_GET['stambuk'];
        $sql = "SELECT * FROM mahasiswa WHERE stambuk = '$stambuk'";
        $result = $koneksi->query($sql);
        if($result->num_rows > 0){
            while ($row = $result->fetch_object()) {
                $nama = $row->nama;
                $jk = $row->jenis_kelamin;
            }
        } else {
            echo "Data Tidak Ditemukan!";
        }
    } else {
        echo "Data Tidak Ditemukan!";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <form action="update.php" method="get">
        <input type="hidden" name="stambuk" value="<?=$stambuk;?>">
        <input type="text" name="nama" placeholder="Nama" value="<?=$nama;?>"><br>
        <input type="text" name="jk" placeholder="Jenis Kelamin" value="<?=$jk;?>"><br>
        <input type="submit" value="Kirim"/>
    </form>
</body>
</html>
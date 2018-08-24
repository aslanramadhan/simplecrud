<?php
    require_once 'koneksi.php';

    $sql = "SELECT * FROM mahasiswa";

?>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Stambuk</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
        <?php
            $result = $koneksi->query($sql);
            if($result->num_rows > 0) {
                while($row = $result->fetch_object()){
        ?>
                    <tr>
                        <td><?=$row->stambuk;?></td>
                        <td><?=$row->nama;?></td>
                        <td><?=$row->jenis_kelamin;?></td>
                        <td>
                            <a href="delete.php?stambuk=<?=$row->stambuk;?>">Hapus</a> | 
                            <a href="edit.php?stambuk=<?=$row->stambuk;?>">Edit</a>
                        </td>
                    </tr>
        <?php
                }
            }
        ?>
    </table>
</body>
</html>
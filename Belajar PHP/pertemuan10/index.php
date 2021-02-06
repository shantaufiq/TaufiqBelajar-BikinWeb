<?php
// menghubungkan ke file function
require 'function.php';

$bus = query("SELECT * FROM armada");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Armada</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>

    <br><br>


    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama Unit</th>
            <th>Jurusan</th>
            <th>Jadwal</th>
            <th>Harga</th>
        </tr>


        <?php $i = 1; ?>
        <?php foreach ($bus as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
                    return confirm('yakin?');">Hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" width="150px" alt=""></td>
                <td><?= $row["nama unit"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
                <td><?= $row["jam-terbang"]; ?></td>
                <td><?= $row["harga-tiket"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>
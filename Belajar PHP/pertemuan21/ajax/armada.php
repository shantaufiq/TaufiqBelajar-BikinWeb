<?php

require '../function.php';
$keyword = $_GET["keyword"];

$query = "SELECT * FROM armada 
        WHERE
        nama unit LIKE '%$keyword%' OR
        jurusan LIKE '%$keyword%' OR
        harga-tiket LIKE '%$keyword%' OR
        jam-terbang LIKE '%$keyword%' OR
        jurusan LIKE '%$keyword%'
        ";
$bus = query($query);

?>

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
                <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
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
<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data
$result = mysqli_query($conn, "SELECT * FROM armada");

// ambil data (fetch) armada dari object result
// mysqli_fetch_row()  // mengambalikan array numerik
// mysqli_fetch_assoc() // mengambalikan array associative
// mysqli_fetch_array() // (dobel) lebih fleksibel untuk memanggil satu data tetapi mempunyai data dobel
// mysqli_fetch_object($bus->email) // mengembalikan objek

// while ($bus = mysqli_fetch_assoc($result)) {
//     var_dump($bus);
// }

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

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama Unit</th>
            <th>Jurusan</th>
            <th>Jam Terbang</th>
            <th>Harga</th>
        </tr>

        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" width="150px" alt=""></td>
                <td><?= $row["nama unit"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
                <td><?= $row["jam-terbang"]; ?></td>
                <td><?= $row["harga-tiket"]; ?></td>
            </tr>
            <?= $i++; ?>
        <?php endwhile; ?>
    </table>
</body>

</html>
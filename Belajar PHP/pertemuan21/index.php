<?php
// mengaktifkan fungsi session
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

// menghubungkan ke file function
require 'function.php';

$bus = query("SELECT * FROM armada");
// ASC => Dari kecil ke besar(terlama) || DSC => Dari besar ke kecil(terbaru)

// tombol cari di tekan
if (isset($_POST["cari"])) {
    $bus = cari($_POST["keyword"]);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        .loader {
            width: 70px;
            position: absolute;
            top: 80px;
            z-index: -1;
            display: none;
        }

        /* menghilangkan elemen pada saat di print */
        @media print {

            .logout,
            .ikontambah,
            .form-cari {
                display: none;
            }
        }
    </style>
</head>

<body>

    <a href="logout.php" class="logout">Logout</a>

    <h1>Daftar Armada</h1>

    <a href="tambah.php" class="ikontambah">Tambah data mahasiswa</a>

    <br><br>
    <!-- form pencarian -->
    <form action="" method="post" class="form-cari">
        <input type="text" name="keyword" id="keyword" size="40" autofocus="" placeholder="masukkan keyword pencarian.." autocomplete="off">
        <button type="submit" name="cari" id="tombol-cari">Cari!</button>

        <img src="img/loading.gif" class="loader" alt="">

    </form>
    <!-- endform pencarian -->

    <!-- tabel armada -->
    <div id="container">
        <br>
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
    </div>
    <!-- tabel armada -->

    <!-- script ajax -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>
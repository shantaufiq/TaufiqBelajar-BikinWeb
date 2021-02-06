<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

// menghubungkan ke file function
require 'function.php';

// pagination 
// konfigurasi
$jumlahDataPerhalaman = 3;
$jumlahData = count(query("SELECT * FROM armada"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;


$bus = query("SELECT * FROM armada LIMIT $awalData, $jumlahDataPerhalaman");
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
</head>

<body>

    <a href="logout.php">Logout</a>

    <h1>Daftar Armada</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>

    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" id="" size="40" autofocus="" placeholder="masukkan keyword pencarian.." autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>
    <br>

    <!-- navigasi -->
    <?php if ($halamanAktif > 1) : ?>
        <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if ($i == $halamanAktif) : ?>
            <a href="?halaman=<?= $i; ?>" style="font-weight:bold; color: red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if ($halamanAktif < $jumlahHalaman) : ?>
        <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
    <?php endif; ?>


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
</body>

</html>
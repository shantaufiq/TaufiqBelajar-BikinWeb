<?php
// cek apakah tidak ada data di $_get
if (
    !isset($_GET["nama"]) ||
    !isset($_GET["gambar"]) ||
    !isset($_GET["rute"]) ||
    !isset($_GET["harga"]) ||
    !isset($_GET["jadwal"])
) {
    // redirect -> memindahkan user dari satu halaman ke halaman lain
    header("Location: latihan1.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Unit</title>
</head>

<body>

    <!--untuk mengambil data yang dikirim dari latihan1 harus memasukkan variabel
variabel superglobal get -->
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["rute"]; ?></li>
        <li><?= $_GET["harga"]; ?></li>
        <li><?= $_GET["jadwal"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke Daftar Armada</a>

</body>

</html>
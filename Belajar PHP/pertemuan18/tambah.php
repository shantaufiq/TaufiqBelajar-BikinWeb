<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

// menghubungkan ke file function
require 'function.php';

// koneksi ke DBMS
// $conn = mysqli_connect("localhost", "root", "", "phpdasar");


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    // if (mysqli_affected_rows($conn) > 0) {
    //     echo "Berhasil";
    // } else {
    //     echo "GAGAL";
    //     echo "<br>";
    //     echo mysqli_error($conn);
    // }


    if (tambah($_POST) > 0) {
        echo "
        <script>
        alert('Data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal ditambahkan!!!!!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data armada</title>
</head>

<body>
    <h1>Tambah data armada</h1>

    <form action="" method="post" enctype="multipart/form-data">

        <ul>
            <li>
                <label for="nama unit">Nama Unit :</label>
                <input type="text" name="nama unit" id="nama unit" required>
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="harga-tiket">Harga :</label>
                <input type="text" name="harga-tiket" id="harga-tiket" required>
            </li>
            <li>
                <label for="jam-terbang">Jadwal :</label>
                <input type="text" name="jam-terbang" id="jam-terbang" required>
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="file" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>


    </form>
    <br><br>

    <a href="index.php">Kembali ke daftar armada</a>




</body>

</html>
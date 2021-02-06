<?php
// menghubungkan ke file function
require 'function.php';

// koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// Ambil data di URL
$id = $_GET["id"];

// query data bus berdasarkan id
$bus = query("SELECT * FROM armada WHERE id = $id")[0];



// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil diubah atau tidak
    // if (mysqli_affected_rows($conn) > 0) {
    //     echo "Berhasil";
    // } else {
    //     echo "GAGAL";
    //     echo "<br>";
    //     echo mysqli_error($conn);
    // }

    if (ubah($_POST) > 0) {
        echo "
        <script>
        alert('Data berhasil diubah');
        document.location.href = 'index.php';
        </script>
        ";
    } else {

        echo ("Error description: " . $conn->error);
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update data armada</title>
</head>

<body>
    <h1>Update data armada</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $bus["id"]; ?>">
        <ul>
            <li>
                <label for="nama unit">Nama Unit :</label>
                <input type="text" name="nama unit" id="nama unit" required value="<?= $bus["nama unit"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $bus["jurusan"]; ?>">
            </li>
            <li>
                <label for=" harga-tiket">Harga :</label>
                <input type="text" name="harga-tiket" id="harga-tiket" required value="<?= $bus["harga-tiket"]; ?>">
            </li>
            <li>
                <label for=" jam-terbang">Jadwal :</label>
                <input type="text" name="jam-terbang" id="jam-terbang" required value="<?= $bus["jam-terbang"]; ?>">
            </li>
            <li>
                <label for=" gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" required value="<?= $bus["gambar"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Update Data</button>
            </li>
        </ul>


    </form>
    <br><br>

    <a href="index.php">Kembali ke daftar armada</a>




</body>

</html>
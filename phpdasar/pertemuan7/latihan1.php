<?php
//!!!!!!!!! $_GET !!!!!!!!!!!!!!
$armada = [
    [
        "nama-unit" => "Duo Saudara - Bestfriend",
        "jurusan" => "Madiun-Jakarta",
        "harga-tiket" => "Rp.350.000",
        "jam-terbang" => "10.15",
        "gambar" => "bus1.jpg"
    ],
    [
        "nama-unit" => "Duo Saudara - Starlight",
        "jurusan" => "Madiun-Bandung",
        "harga-tiket" => "Rp.300.000",
        "jam-terbang" => "11.25",
        "gambar" => "bus2.jpg"
    ],
    [
        "nama-unit" => "Duo Saudara - Syndrome",
        "jurusan" => "Ponorogo-Bakahuni Merak",
        "harga-tiket" => "Rp.400.000",
        "jam-terbang" => "12.45",
        "gambar" => "bus3.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Armada Duo Saudara</title>
</head>

<body>
    <h1>Daftar Bus</h1>

    <!-- masukkan data url yang akan dikirim -->
    <ul>
        <?php foreach ($armada as $unt) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $unt["nama-unit"]; ?>&rute=<?= $unt["jurusan"]; ?>
                &harga=<?= $unt["harga-tiket"]; ?>&jadwal=<?= $unt["jam-terbang"]; ?>
                &gambar=<?= $unt["gambar"]; ?>"> Nama Unit : <?= $unt["nama-unit"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>


</body>

</html>
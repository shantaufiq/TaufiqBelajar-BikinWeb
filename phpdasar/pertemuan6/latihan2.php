<?php
// $mahasiswa = [
//     [
//         "Muhammad Taufiq", "7708201081", "shantaufiq021@gmail.com",
//         "Rekayasa Multimedia"
//     ],
//     [
//         "Nafiisa Amalia", "7786942368", "nafiisaamr@gmail.com",
//         "Hukum Keluarga"
//     ]
// ];

//! Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
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
        "nama-unit" => "Duo Saudara - Syindrome",
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
    <title>Data Semua Unit Bus</title>
</head>

<body>
    <h1>Daftar Bus</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama Unit : <?= $mhs["nama-unit"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Harga Tiket : <?= $mhs["harga-tiket"]; ?></li>
            <li>Jam Keberangkatan : <?= $mhs["jam-terbang"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>
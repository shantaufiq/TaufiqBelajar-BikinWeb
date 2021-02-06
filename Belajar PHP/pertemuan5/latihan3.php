<?php
$mahasiswa = [
    ["Taufiq", "7708201081", "Rekayasa Multimedia", "shantaufiq021@gmail.com"],
    ["Nafiisa", "21032001", "Hukum Islam", "nafisaamr@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- array didalam array -->
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <?php foreach ($mhs as $maha) : ?>
                <li><?= $maha; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>

</body>

</html>
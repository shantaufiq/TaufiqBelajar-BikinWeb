<?php
// array
// variable yang dapat memiliki banyak nilai
// element pada array boleh memiliki tipe data yang berbeda

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu", 002);
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$ael = [123, "tulisan", false];

// menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// echo "<br>";
// menampilkan 1 elemen pada array
// echo $ael[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);

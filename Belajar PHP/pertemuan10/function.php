<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;

    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama_unit"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $harga = htmlspecialchars($data["harga-tiket"]);
    $jadwal = htmlspecialchars($data["jam-terbang"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data
    $query = "INSERT INTO armada
                VALUES
                ('', '$nama', '$jurusan', '$harga', '$jadwal', '$gambar' )
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// fungsi hapus
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM armada WHERE id = $id");

    return mysqli_affected_rows($conn);
}

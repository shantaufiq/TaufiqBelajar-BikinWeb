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

// ! fungsi tambah
function tambah($data)
{
    global $conn;

    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama_unit"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $harga = htmlspecialchars($data["harga-tiket"]);
    $jadwal = htmlspecialchars($data["jam-terbang"]);

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO armada
                VALUES
                ('', '$nama', '$jurusan', '$harga', '$jadwal', '$gambar' )
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//! fungsi upload
function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
            </script>";
        return false;
    }

    // ?cek apakah yang dipload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', '$namaFile');
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('harus berbentuk file gambar!');
            </script>";
        return false;
    }
    // cek jika ukurannya terlalu besar
    $ekstensiFile = [' > 1000000 '];
    if (in_array($ukuranFile, $ekstensiFile)) {
        echo "<script>
            alert('ukuran gambar terlalu besar !');
        </script>";
        return false;
    }

    // lolos pengecekan, kemudian gambat siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= ".";
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;
}

//! fungsi hapus
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM armada WHERE id = $id");

    return mysqli_affected_rows($conn);
}

//? fungsi ubah
function ubah($data)
{
    global $conn;

    // ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama_unit"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $harga = htmlspecialchars($data["harga-tiket"]);
    $jadwal = htmlspecialchars($data["jam-terbang"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES["gambar"]['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }


    // query insert data
    $query = "UPDATE armada SET
        nama unit = '$nama',
        jurusan = '$jurusan',
        harga-tiket = '$harga',
        jam-terbang = '$jadwal',
        gambar = '$gambar'
    WHERE id = $id
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// ! fungsi cari di index html
function cari($keyword)
{
    $query = "SELECT * FROM armada 
                WHERE
                nama unit LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%' OR
                harga-tiket LIKE '%$keyword%' OR
                jam-terbang LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
                ";
    return query($query);
}

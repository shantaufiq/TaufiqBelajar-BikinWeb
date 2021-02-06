<?php 
    //! date -> untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    ! time
    UNIX Timestamp / EPOCH time -> asal mula waktu di dunia komputer
    detik yang sudah berlalu sejak 1 januari 1970
    echo time();

    //* echo date("l, d-M-Y", time()+60*60*24*51);

    //! mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0,0)
    // jam,menit,detik,bulan,tanggal,tahun
    echo date("l, d-M-Y <br>", mktime(0,0,0,3,21,2001));

    // strtotime
    echo date("l, d-M-Y", strtotime("21 jan 2001"));

    //! beberapa function yang ada hubungannya dengan String
    // strlen() -> menghitungan panjang dari sebuah string
    // strcmp() -> string compare, untuk membandingkan dua buah string
    // explode() -> memecah sebuah string menjadi array
    // htmlspecialchars -> untuk menjaga dari hacker

    // ! Utility (bantuan)
    // var_dump() -> fungsi untuk mencetak variabel, array, objek
    // isset() -> untuk mengecek apakah variabel sudah dipakai atau belum (menghasilkan nilai boolean- true or false)
    // empty () -> mengecek apakah variabel ada atau tidak
    // die() -> memberentikan program
    // sleep() -> untuk memberhentikan sementara
?>
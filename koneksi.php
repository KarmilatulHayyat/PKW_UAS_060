<?php
//koneksi ke database(""merupakan password phpmyadmin)
$koneksi = mysqli_connect("localhost", "root", "", "toko buku");

// cek koneksi ke database toko buku
//apa bila error
if (mysqli_connect_errno()){
    echo "koneksi database gagal : " . mysqli_connect_error();
}
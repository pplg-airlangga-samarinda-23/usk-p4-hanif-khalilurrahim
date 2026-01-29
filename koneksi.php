<?php
$koneksi = mysqli_connect("localhost", "root", "", "perpus_c3");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
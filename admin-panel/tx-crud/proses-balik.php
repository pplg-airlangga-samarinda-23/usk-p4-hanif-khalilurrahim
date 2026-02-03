<?php
include __DIR__ . '/../../koneksi.php'; // sesuaikan path

// Cek ID
if (!isset($_GET['id'])) {
    die("ID tidak ditemukan");
}

$id = $_GET['id'];

// Ambil data transaksi
$trx = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE id='$id'"));

if (!$trx) {
    die("Data tidak ada");
}

// Isi tanggal kembali & ubah status
$tgl_balik = date('Y-m-d');
$status = 'mengembalikan';

mysqli_query($koneksi, "UPDATE peminjaman
                     SET tgl_balik='$tgl_balik', status='$status'
                     WHERE id='$id'");

// Tambah stok buku lagi
mysqli_query($koneksi, "UPDATE buku
                     SET stok = stok + 1
                     WHERE judul='$trx[judul]'");

// Balik ke halaman sebelumnya
header("Location: index.php");
exit;
?>
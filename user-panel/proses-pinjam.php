<?php
include __DIR__ . '/../koneksi.php';

if(isset($_POST['pinjam'])){
    $id_buku = $_POST['id_buku'];
    $nama = $_POST['nama'];

    // Ambil data buku
    $buku = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT * FROM buku WHERE id='$id_buku'"));

    if($buku['stok'] <= 0){
        echo "Stok habis!";
        exit;
    }

    $judul = $buku['judul'];
    $tgl_buat = date('Y-m-d');
    $bts_balik = date('Y-m-d', strtotime('+14 days'));
    $status = 'meminjam';

    // Simpan transaksi
    mysqli_query($koneksi,"INSERT INTO peminjaman
        (nama, judul, tgl_buat, bts_balik, status)
        VALUES
        ('$nama','$judul','$tgl_buat','$bts_balik','$status')");

    // Kurangi stok buku
    mysqli_query($koneksi,"UPDATE buku SET stok = stok - 1 WHERE id='$id_buku'");

    header("Location: histori-pinjam.php");
}
?>

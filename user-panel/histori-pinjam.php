<?php

include __DIR__ . '/../koneksi.php';

$sql = "SELECT * FROM peminjaman";
$where = "";

if (isset($_GET['cari']) && $_GET['cari'] != '') {
    $cari = $_GET['cari'];
    $where = "WHERE nama LIKE '%$cari%' OR nama LIKE '%$cari%'";
}

$query = "SELECT * FROM peminjaman $where ORDER BY id DESC";
$historis = mysqli_query($koneksi, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histori</title>
    <style>
        th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Histori</h1>
    <form method="GET">
        <input type="text" name="cari" placeholder="Cari nama / buku..."
            value="<?= isset($_GET['cari']) ? $_GET['cari'] : '' ?>">
        <button type="submit">Search</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nama Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Batas Balik</th>
                <th>Tanggal Pengembalikan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=0; foreach ($historis as $histori) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $histori['nama'] ?></td>
                <td><?= $histori['judul'] ?></td>
                <td><?= $histori['tgl_buat'] ?></td>
                <td><?= $histori['bts_balik'] ?></td>
                <td><?= $histori['tgl_balik'] ?></td>
                <td><?= $histori['status'] ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <a href="dashboard.php">Back</a>
</body>
</html>
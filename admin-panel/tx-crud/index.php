<?php

include __DIR__ . '/../../koneksi.php';

$sql = "SELECT * FROM peminjaman";
$baliks = $koneksi->execute_query($sql)->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th, td {
            border: 1px solid black;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    
    <h1>pengembalian</h1>
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
            <?php $no=0; foreach ($baliks as $balik) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $balik['nama'] ?></td>
                <td><?= $balik['judul'] ?></td>
                <td><?= $balik['tgl_buat'] ?></td>
                <td><?= $balik['bts_balik'] ?></td>
                <td><?= $balik['tgl_balik'] ?></td>
                <td><?= $balik['status'] ?></td>
                <td><a href="proses-balik.php?id=<?= $balik['id'] ?>">Pengembalikan</a></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</body>
</html>
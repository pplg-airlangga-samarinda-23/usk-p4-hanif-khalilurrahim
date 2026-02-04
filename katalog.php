<?php

include __DIR__ . '/koneksi.php';

$sql = "SELECT * FROM buku";
$where = "";

if (isset($_GET['cari']) && $_GET['cari'] != '') {
    $cari = $_GET['cari'];
    $where = "WHERE judul LIKE '%$cari%' OR judul LIKE '%$cari%'";
}

$query = "SELECT * FROM buku $where ORDER BY id DESC";
$books = mysqli_query($koneksi, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Buku</title>
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
    
    <h1>Katalog Buku</h1>
    <h2><a href="/usk-p4-HANIF-KHALILURRAHIM/index.php">Back</a></h2>

    <form method="GET">
        <input type="text" name="cari" placeholder="Cari nama / buku..."
            value="<?= isset($_GET['cari']) ? $_GET['cari'] : '' ?>">
        <button type="submit">Search</button>
    </form>

    <table>
        <thead>
            <th>No</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Stok</th>
        </thead>
        <tbody>
            <?php $no=0; foreach ($books as $book) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $book['judul'] ?></td>
                <td><?= $book['pengarang'] ?></td>
                <td><?= $book['stok'] ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
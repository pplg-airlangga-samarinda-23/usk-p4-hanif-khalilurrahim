<?php include __DIR__ . '/../koneksi.php'; 

$sql = "SELECT * FROM buku";
// $where = "";

// if (isset($_GET['cari']) && $_GET['cari'] != '') {
//     $cari = $_GET['cari'];
//     $where = "WHERE judul LIKE '%$cari%' OR judul LIKE '%$cari%'";
// }

// $query = "SELECT * FROM buku $where ORDER BY id DESC";
// $b = mysqli_query($koneksi, $query);

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

<h2>Daftar Buku</h2>
<a href="dashboard.php">Back</a>

<!-- <form method="GET">
    <input type="text" name="cari" placeholder="Cari nama / buku..."
        value="<?= isset($_GET['cari']) ? $_GET['cari'] : '' ?>">
    <button type="submit">Search</button>
</form> -->

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama Buku</th>
        <th>Penulis</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no=1;
    $data = mysqli_query($koneksi,"SELECT * FROM buku");
    while($b = mysqli_fetch_assoc($data)){
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $b['judul'] ?></td>
        <td><?= $b['pengarang'] ?></td>
        <td><?= $b['stok'] ?></td>
        <td>
            <?php if($b['stok'] > 0){ ?>
            <form action="proses-pinjam.php" method="POST">
                <input type="hidden" name="id_buku" value="<?= $b['id'] ?>">
                Nama: <input type="text" name="nama" required>
                <button type="submit" name="pinjam">Pinjam</button>
            </form>
            <?php } else { ?>
                <b>Stok Habis</b>
            <?php } ?>
        </td>
    </tr>
<?php } ?>
</table>

</body>
</html>
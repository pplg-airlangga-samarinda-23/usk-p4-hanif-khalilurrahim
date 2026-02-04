<?php

include __DIR__ . '/../../koneksi.php';

$sql = "SELECT * FROM pengguna";
$where = "";

if (isset($_GET['cari']) && $_GET['cari'] != '') {
    $cari = $_GET['cari'];
    $where = "WHERE username LIKE '%$cari%' OR username LIKE '%$cari%'";
}

$query = "SELECT * FROM pengguna $where ORDER BY id DESC";
$users = mysqli_query($koneksi, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>anggota CRUD</title>
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

    <form method="GET">
        <input type="text" name="cari" placeholder="Cari nama / buku..."
            value="<?= isset($_GET['cari']) ? $_GET['cari'] : '' ?>">
        <button type="submit">Search</button>
    </form>

    <table>
        <thead>
            <a href="create.php ">Add</a>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=0; foreach ($users as $user) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $user['username'] ?></td>
                <td><?= $user['password'] ?></td>
                <td><?= $user['role'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $user['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?= $user['id'] ?>">Hapus</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</body>
</html>
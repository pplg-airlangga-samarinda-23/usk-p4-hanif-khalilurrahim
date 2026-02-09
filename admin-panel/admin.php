<?php
session_start();
if ($_SESSION['role'] != 'admin') {
    die("Akses ditolak!");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>

    <h1>Admin Panel</h1>

    <nav>
        <ul>
            <li><a href="buku-crud/index.php">CRUD buku</a></li>
            <li><a href="anggota-crud/index.php">CRUD anggota admin</a></li>
            <li><a href="tx-crud/index.php">CRUD transaksi</a></li>
            <li><a href="/../index.php">Back</a></li>
        </ul>
    </nav>

</body>
</html>
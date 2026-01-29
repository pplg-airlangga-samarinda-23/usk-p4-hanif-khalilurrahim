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
            <li><a href="">CRUD anggota admin</a></li>
            <li><a href="">CRUD transaksi</a></li>
            <li><a href="/usk-p4-HANIF-KHALILURRAHIM/login.php">Back</a></li>
        </ul>
    </nav>

</body>
</html>
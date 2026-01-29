<?php
session_start();
if ($_SESSION['role'] != 'user') {
    die("Akses ditolak!");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    
    <h1>Dashboard Aplikasi Perpustakaan</h1>

    <nav>
        <ul>
            <li><a href="">Peminjaman</a></li>
            <li><a href="">Pengembalian</a></li>
            <li><a href="/usk-p4-HANIF-KHALILURRAHIM/login.php">LogOut</a></li>
        </ul>
    </nav>
    
</body>
</html>
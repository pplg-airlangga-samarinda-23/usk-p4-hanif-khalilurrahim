<?php
include __DIR__ . '/../../koneksi.php';

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Role dikunci sebagai user
$role = "admin";

$query = "INSERT INTO pengguna (username, password, role)
          VALUES ('$username', '$password', '$role')";

if (mysqli_query($koneksi, $query)) {
    header("Location: index.php");
} else {
    echo "Gagal daftar: " . mysqli_error($koneksi);
}
?>
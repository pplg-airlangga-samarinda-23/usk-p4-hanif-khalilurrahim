<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Role dikunci sebagai user
$role = "user";

$query = "INSERT INTO pengguna (username, password, role)
          VALUES ('$username', '$password', '$role')";

if (mysqli_query($koneksi, $query)) {
    echo "Register berhasil! <a href='login.php'>Login di sini ya</a>";
} else {
    echo "Gagal daftar: " . mysqli_error($koneksi);
}
?>
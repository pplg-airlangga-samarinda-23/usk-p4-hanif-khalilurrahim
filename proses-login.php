<?php
session_start();
include 'koneksi.php';

if (!isset($_POST['login'])) {
    header("Location: login.php");
    exit;
}

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username='$username'");
$data  = mysqli_fetch_assoc($query);

if ($data && password_verify($password, $data['password'])) {

    $_SESSION['username'] = $data['username'];
    $_SESSION['nama']     = $data['nama'];   // 🔥 TAMBAHAN PENTING
    $_SESSION['id_user']  = $data['id'];     // opsional tapi bagus
    $_SESSION['role']     = $data['role'];

    if ($data['role'] == 'admin') {
        header("Location: admin-panel/admin.php");
    } else {
        header("Location: user-panel/dashboard.php");
    }
    exit;

} else {
    echo "Username atau password salah! <a href='login.php'>Coba lagi</a>";
}
?>

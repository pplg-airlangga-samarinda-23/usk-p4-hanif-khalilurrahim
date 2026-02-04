<?php

include __DIR__ . '/../../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];
    $sql = "SELECT * FROM pengguna WHERE id=?";
    $book = $koneksi->execute_query($sql, [$id])->fetch_assoc();
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $role = $_POST['role'];
    $id = $_GET['id'];

    $sql = "UPDATE pengguna SET username=?, role=? WHERE id=?";
    $result = $koneksi->execute_query($sql, [$username, $role, $id]);

    if ($result) {
        header("location:index.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    
    <form action="" method="post">
        <div class="form-item">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="<?= $book['username'] ?>">
        </div>
        <div class="form-item">
            <label for="role">Role</label>
            <input type="enum" name="role" id="role" value="<?= $book['role'] ?>">
        </div>
        <button type="submit">Edit</button>
    </form>

</body>
</html>
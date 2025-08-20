<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP Native</title>
</head>
<body>
    <h2>Daftar Students</h2>
    <a href="tambah.php">Tambah Data</a>
    <br><br>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM students");
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['name']; ?></td>
            <td><?= $row['email']; ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> | 
                <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

